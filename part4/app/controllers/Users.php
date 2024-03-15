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

                    // $redirecturl = URLROOT . '/users/login';
                    // header('location:' . $redirecturl);


                    flash("register_success", "You are registered successfully");
                    redirect('users/login');
                } else {
                    die('Something Wrong');
                }

            } else {
                $this->view('users/register', $data);

            }


            $this->view('users/register', $data);


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

            $this->view('users/register', $data);

        }


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



            // validate password 
            if (empty($data['email'])) {
                $data['emailerror'] = "Please enter email";
            } else {

                if ($this->usermodel->registeremailcheck($data['email'])) {


                } else {
                    $data['emailerr'] = "No user founded";
                }
            }







            if (empty($data['password'])) {
                $data['passworderror'] = "Please enter password";
            }



            if (empty($data['emailerror']) && empty($data['passworderror'])) {
                // die('success');

                $loginuser = $this->usermodel->login($data['email'], $data['password']);

                if ($loginuser) {

                    // die('sussessful login');


                    $this->createusersession($loginuser);
                } else {
                    $data['passworderror'] = "Password incorrect";
                    $this->view('users/login', $data);

                }


            } else {


                $this->view('users/login', $data);


            }







        } else {
            $data = [
                "email" => "",
                "password" => "",
                "emailerror" => "",
                "passworderror" => "",

            ];

            $this->view('users/login', $data);
        }


    }


    public function createusersession($user)
    {

        echo $user->id; //err, cuz fetch(PDO::FETCH_ASSOC) in database file
        echo $user['id'];

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];



        redirect('mainpage/index');
    }


    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);

        session_destroy();

        redirect('users/login');
    }
}

?>