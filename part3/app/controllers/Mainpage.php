<?php

// echo "hay i am main pages";

class Mainpage extends Controller
{

    public $mainmodel;
    public function __construct()
    {
        // echo "I am Main Page <br>";
        $this->mainmodel = $this->model('Main');
    }

    public function index()
    {
        // $this->view('mainpage/index', ["greeting" => 'Hello Sir']);

        $brandnames = $this->mainmodel->getarticles();
        var_dump($brandnames);

        $data = [
            'brandnames' => $brandnames,
        ];

        $this->view('mainpage/index', $data);
    }






    public function show($id)
    {
        echo "I am Main Page- Show = Show ID is $id <br>";

    }
}
?>