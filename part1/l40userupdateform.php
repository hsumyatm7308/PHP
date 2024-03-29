<?php 

   ini_set("display_errors",1);
    // if(isset($_POST['submit'])){
    //     echo "Form Submitted";
    // }

    // =>Mysqli Object Oriented 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "wdf008";

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    if($conn->connect_errno){
        die("Connection Failed : ". $conn->connect_error);
    }

    $sql = "SELECT id,name,email FROM users";
    $result = $conn->query(($sql));

    echo "$result->num_rows";


    if(isset($_POST['submit'])){

        // $stmt = $conn->prepare("UPDATE users SET name=?,email=?,password=? WHERE id =?");
        // $stmt->bind_param('sssi',$name,$email,$password,$id);

       $query = "Update users SET "; //beware space
       $query .= "name=?,";  //beware comma
       $query .= "email=?,";  //beware comma
       $query .= "password=? "; //beware space
       $query .= "WHERE id=?";

       echo $query;

       $stmt = $conn->prepare($query);
       $stmt->bind_param('sssi',$name,$email,$password,$id);

        $id = $_POST["userid"];
        $name = textfilter($_POST['name']);
        $email = textfilter($_POST['email']);
        $password = MD5(textfilter($_POST['password']));
        $stmt->execute();
     


    

        echo "Update User Successfully";

        $stmt->close();
        $conn->close();

    }

    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

?>



<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-6 mx-auto">
        <h3 class="text-center my-3">Register Form</h3>
        <form action="" method="post">

        <div class="form-group mb-3">
            <label for="userid">User ID</label>
            <select name="userid" id="userid" class="form-control">
                <!-- <option value="1"></option> -->
                <?php
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $id = $row['id'];
                            echo "<option value='$id'>$id</option>";
                        }
                    }else{
                        echo "<option value=''></option>";
                    }
                ?>
            </select>
        </div>

            <div class="form-group mb-3">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>

            <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sign Up" />

        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


    <!-- 
    ZOOM ID = 528 716 1189 
    PASSWORD =  
    -->