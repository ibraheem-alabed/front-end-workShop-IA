<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Tests;
use Core\Model\Post;
use Core\Model\Transaction;
use Exception;

class Endpoints extends Controller
{
        use Tests;

        protected $request_body;
        protected $http_code = 200;

        protected $response_schema = array(
                "success" => true, // to provide the response status.
                "message_code" => "", // to provide message code for the front-end developer for a better error handling
                "body" => []
        );

        function __construct()
        {
                $this->request_body = json_decode(file_get_contents("php://input"));
        }

        public function render()
        {
                header("Content-Type: application/json"); // changes the header information
                http_response_code($this->http_code); // set the HTTP Code for the response
                echo json_encode($this->response_schema); // convert the data to json format
        }

        function index()
        {
                $transaction = new Transaction;
                $transactions = $transaction->get_all();
                $this->response_schema['body'] = $transactions;
        }

        function create()
        {
                self::check_if_empty($this->request_body);
                try {
                        $post = new Post;
                        $item_id = $this->request_body->item_input_id;
                        $current_item = $post->get_by_id($item_id);
                        // var_dump($current_item);
                        // die;
                        $total=($this->request_body->quantity)*($current_item->silling_price);
                        $create_transaction = array(
                                "post_id" => $current_item->id,
                                "post_name"=>$current_item->name,
                                "quantity"=>$this->request_body->quantity,
                                "price"=>$current_item->silling_price,
                                "cost"=>$current_item->cost,
                                "total"=>$total
                        );
                        $tag = new Transaction;
                        $tag->create($create_transaction);
                       
                        $this->response_schema['message_code'] = "post_created_successfuly";
                } catch (\Exception $error) {
                        $this->response_schema['message_code'] = "post_was_not_created";
                        $this->http_code = 421;
                }
        }
        function delete(){
              $transaction= new Transaction;
        $transaction->delete($this->request_body->id);
        }
}
