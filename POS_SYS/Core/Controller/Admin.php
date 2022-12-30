<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Helpers\Tests;
use Core\Model\Post;
use Core\Model\Transaction;
use Core\Model\User;


use Core\Helpers\Helper;

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
                        $post = new Post; // new model items.
        $this->data['post'] = $post->get_all();
        $this->data['posts_count'] = count($post->get_all());
        $this->permissions(['post:read']);
        // $transaction = new Transaction; // new model items.
        // $this->data['transactions'] = $transaction->get_all();
        // $this->data['transactions_count'] = count($transaction->get_all());
        $user = new User; // new model post.
        $this->data['users'] = $user->get_all();
        $this->data['user_count'] = count($user->get_all());

        }
}
