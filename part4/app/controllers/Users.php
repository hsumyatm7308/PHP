<?php

ini_set('display_errors', 1);

class Users extends Controller
{


    protected $usermodel;

    public function __construct()
    {

        $this->usermodel = $this->model('User');

    }

    public function register()
    {

        $data = [];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                "fullname" => trim($_POST['fullname']),
                "email" => trim($_POST['email']),
                "password" => trim($_POST['password']),
                "comfirmpassword" => trim($_POST['comfirmpassword']),
                "fullnameerror" => "",
                "emailerror" => "",
                "passworderror" => "",
                "comfirmpassworderror" => "",

            ];

            if (empty($data['fullname'])) {
                $data['fullnameerror'] = "Please enter full name";
            }

            if (empty($data['email'])) {
                $data['emailerror'] = "Please enter email";
            } else {

                // check email exist or not 
                if ($this->usermodel->registeremailcheck($data['email'])) {
                    $data['emailerror'] = "Email already exist";

                }
            }

            if (empty($data['password'])) {
                $data['passworderror'] = "Please enter password";
            } elseif (strlen($data['password']) < 5) {
                $data['passworderror'] = "Password must be at least 5 characters";
            }


            if (empty($data['comfirmpassword'])) {
                $data['comfirmpassworderror'] = "Please enter comfirm password";
            } else {
                if ($data['password'] != $data['comfirmpassword']) {

                    $data['comfirmpassworderror'] = "Password doesn't match";

                }
            }


            if (empty($data['fullnameerror']) && empty($data['emailerror']) && empty($data['passworderror']) && empty($data['comfirmpassworderror'])) {
                // die('success');

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                if ($this->usermodel->register($data)) {

                    $redirecturl = URLROOT . '/users/login';
                    header('location:' . $redirecturl);
                } else {
                    die('Something Wrong');
                }

            } else {
                $this->view('users/register', $data);

            }




        } else {
            $data = [
                "fullname" => "",
                "email" => "",
                "password" => "",
                "comfirmpassword" => "",
                "fullnameerror" => "",
                "emailerror" => "",
                "passworderror" => "",
                "comfirmpassworderror" => "",

            ];
        }

        $this->view('users/register', $data);

    }

    public function login()
    {
        $data = [];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                "email" => trim($_POST['email']),
                "password" => trim($_POST['password']),
                "emailerror" => "",
                "passworderror" => "",

            ];



            if (empty($data['email'])) {
                $data['emailerror'] = "Please enter email";
            }

            if (empty($data['password'])) {
                $data['passworderror'] = "Please enter password";
            }

            $this->view('users/login', $data);

        } else {

        }
        $this->view('users/login', $data);
    }

}

?>