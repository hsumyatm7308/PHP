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


    public function create()
    {
        // $data = [
        //     'title' => '',
        //     'content' => '',

        // ];

        if ($_SERVER['REQUEST_METHOD'] === "POST") {


            // sanitize POST array 
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            echo "<pre>" . print_r($_POST, true) . "</pre>";

            $data = [
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'user_id' => $_SESSION['user_id'],
                'contenterr' => '',
                'titleerr' => ''
            ];


            // validate data 
            if (empty($data['title'])) {
                $data['titleerr'] = "Please enter title";
            }

            if (empty($data['content'])) {
                $data['contenterr'] = "Please enter content";
            }

            // no errors 
            if (empty($data['titleerr']) && empty($data['contenterr'])) {
                //valided


                // if ($this->postmodel->createpost($data)) {
                //     flash('post_success', 'New Post Created');
                //     redirect('posts');
                // } else {
                //     die('Error FunFoundction');
                // }


            } else {
                $data = [
                    'title' => '',
                    'content' => ''
                ];
                $this->view(('posts/create'), $data);

            }


        } else {
            $data = [
                'title' => '',
                'content' => ''
            ];

            $this->view(('posts/create'), $data);

        }
    }

    public function show($id)
    {
        $post = $this->postmodel->getpostbyid($id);

        $data = [
            'post' => $post
        ];
        $this->view('posts/show', $data);

    }


}




?>