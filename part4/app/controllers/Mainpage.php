<?php

// echo "hay i am main pages";

class Mainpage extends Controller
{

    public $mainmodel;
    public function __construct()
    {
        $this->mainmodel = $this->model('Main');
    }

    public function index()
    {

        $data = [
            'title' => 'Main',
        ];

        $this->view('mainpage/index', $data);
    }


    public function about()
    {

        $data = [
            'title' => 'About',
        ];

        $this->view('mainpage/about', $data);
    }


    public function properties()
    {

        $data = [
            'title' => 'Properties',
        ];

        $this->view('mainpage/properties', $data);
    }



    public function services()
    {

        $data = [
            'title' => 'services',
        ];

        $this->view('mainpage/services', $data);
    }


    public function customer()
    {

        $data = [
            'title' => 'customers',
        ];

        $this->view('mainpage/customer', $data);
    }


    public function furniture()
    {

        $data = [
            'title' => 'furniture',
        ];

        $this->view('mainpage/furniture', $data);
    }



    public function contact()
    {

        $data = [
            'title' => 'furniture',
        ];

        $this->view('mainpage/contact', $data);
    }





}
?>