<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Model\Post;
use Core\Model\Tag;
use Core\Model\User;
use Core\Model\Item;
use Core\Model\Transaction;
use DateTime;

class Front extends Controller
{
    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }

    function __construct()
    {
        $this->admin_view(false);
    }

    /**
     * List all news
     *
     * @return void
     */
    public function index()
    {
        $this->view = 'home';
        $item = new Item();
        $this->data['items'] = $item->get_all();
    }

    public function single()
    {
        $this->view = 'single';
        $item = new Item();
        $selected_item = $item->get_by_id($_GET['id']); // get the item data (including the user_id)
        $user = new User(); // get the user model to get the author info
        $author = $user->get_by_id($selected_item->user_id); // get the author by using the user_id in the $selected_post
        $selected_item->author = !empty($author) ? $author->display_name : null; // check if we got a user withe the provided user_id

        $date = new \DateTime($selected_item->created_at);
        $selected_item->created_at = $date->format('d/m/Y');

        // get tags related to the current item
        $transaction = new Transaction();
        // get related tags (Should be implemented in the Tag Model)
        $sql = "SELECT * FROM items_transactions WHERE item_id={$_GET['id']}";
        $transactions_query = $transaction->connection->query($sql); // get data from mysql
        $item_transactions_relations = array(); // create container (Array) for the relations
        if ($transactions_query->num_rows > 0) { // fill out the relations container
            while ($row = $transactions_query->fetch_object()) {
                $item_transactions_relations[] = $row;
            }
        }

        // get the transactions by id from the transactions table
        $transactions = array();
        foreach ($item_transactions_relations as $relation) {
            $transactions[] = $transaction->get_by_id($relation->transaction_id);
        }

        // get the unique transactions. 
        $final_transactions = array();
        foreach ($transactions as $tag) {
            if (!in_array($transaction->name, $final_transactions)) {
                $final_transactions[$transaction->id] = $transaction->name;
            }
        }

        // escape XSS attacks
        $selected_item->content = \htmlspecialchars($selected_item->content);

        $selected_item->tags = $final_transactions;
        $this->data['item'] = $selected_item;
    }
}
