<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Helpers\Tests;
use Core\Model\Post;
use Core\Model\Transaction;
use Core\Model\User;


use Core\Helpers\Helper;
use Core\Model\Item;

class Admin extends Controller
{
        public function render()
        {
                if (!empty($this->view))
                        $this->view();
        }

        function __construct()
        {
                $this->auth();
                $this->admin_view(true);
        }

        public function index()
        {
                $this->view = 'dashboard';
        $item = new Item; // new model items.
        $this->data['item'] = $item->get_all();
        $this->data['items_count'] = count($item->get_all());
        $this->data['top_five']= $item->connection->query("SELECT * from items ORDER BY `items`.`silling_price` DESC limit 5");
        $this->permissions(['post:read']);
        $transaction = new Transaction; // new model items.
        $this->data['transactions'] = $transaction->get_all();
        $this->data['transactions_count'] = count($transaction->get_all());
        $user = new User; // new model post.
        $this->data['users'] = $user->get_all();
        $this->data['user_count'] = count($user->get_all());

        }
}
