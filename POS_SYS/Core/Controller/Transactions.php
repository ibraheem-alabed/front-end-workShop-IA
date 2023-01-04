<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Base\View;
use Core\Helpers\Helper;
use Core\Model\Tag;
use Core\Model\Item;
use Core\Model\Transaction;

class Transactions extends Controller
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

    /**
     * Gets all transactions
     *
     * @return array
     */
    public function index()
    {
        $this->permissions(['tag:read']);
        $this->view = 'transactions.index';
        $transaction = new Transaction; // new model transaction.
        $this->data['transactions'] = $transaction->get_all();
        $this->data['transactions_count'] = count($transaction->get_all());
        $this->data['user']=$_SESSION['user']['user_id'];
        $item= new Item;
        $items=$item->get_all();
        $this->data['items']=$items;

    }

    public function single()
    {
        $this->permissions(['tag:read']);
        $this->view = 'tags.single';
        $transaction = new Transaction();
        $this->data['transaction'] = $transaction->get_by_id($_GET['id']);
    }

    /**
     * Display the HTML form for item creation
     *
     * @return void
     */
    public function create()
    {
        $this->permissions(['tag:create']);
        $this->view = 'transactions.create';
    }

    /**
     * Creates new item
     *
     * @return void
     */
    public function store()
    {
        $this->permissions(['tag:create']);
        $transaction = new Transaction();
        $transaction->create($_POST);
        Helper::redirect('/transactions');
    }

    /**
     * Display the HTML form for item update
     *
     * @return void
     */
    public function edit()
    {
        $this->permissions(['tag:read', 'tag:update']);
        $this->view = 'transactions.edit';
        $transaction = new Transaction();
        $this->data['transaction'] = $transaction->get_by_id($_GET['id']);
    }

    /**
     * Updates the item
     *
     * @return void
     */
    public function update()
    {
        $this->permissions(['tag:read', 'tag:update']);
        $transaction = new Transaction();
        $transaction->update($_POST);
        Helper::redirect('/transaction?id=' . $_POST['id']);
    }

    /**
     * Delete the item
     *
     * @return void
     */
    public function delete()
    {
        $this->permissions(['tag:read', 'tag:delete']);
        $transaction = new Transaction();
        $transaction->delete($_GET['id']);
        Helper::redirect('/transactions');
    }
}
