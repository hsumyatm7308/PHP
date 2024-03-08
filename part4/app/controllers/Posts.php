<?php
ini_set('display_errors', 1);



class Posts extends Controller
{

    protected $postmodel;

    public function __construct()
    {

        // if (!isset($_SESSION['user_id'])) {
        //     redirect('users/login');
        // }

        if (!auth()) {
            redirect('users/login');
        } else {
            $this->postmodel = $this->model('Post');
        }


    }


    public function index()
    {
        $posts = $this->postmodel->allposts();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }




}




?>