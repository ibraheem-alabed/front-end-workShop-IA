<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Helpers\Tests;
use Core\Model\Post;
use Core\Model\Transaction;
use Core\Model\User;
class Dashboards extends Controller
{
    use Tests;

    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }
    public function index()
    {
        $this->view="dashboard";
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
