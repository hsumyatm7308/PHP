<?php

// echo "hay i am main pages";

class Mainpage extends Controller
{
    public function __construct()
    {
        // echo "I am Main Page <br>";
    }

    public function index()
    {
        // echo "I am Main Page - Index <br>";
        $this->view('mainpage/index', ["greeting" => 'Hello Sir']);


        // $data = [
        //     'greeting' => 'Hello Sir'
        // ];

        // $this->view('mainpage/index', $data);


    }

    public function show($id)
    {
        echo "I am Main Page- Show = Show ID is $id <br>";

    }
}
?>