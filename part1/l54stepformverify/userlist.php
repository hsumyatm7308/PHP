<?php

require_once "./dbconnect.php";


try {

    $stmt = $conn->prepare("SELECT id,firstname,lastname,email,dob,phone,address FROM users");
    $stmt->execute();
} catch (PDOException $e) {
    echo "Error Found: " . $e->getMessage();
}

$conn = null;

?>





<!DOCTYPE html>
<html>

<head>
    <title>User List Form</title>
    <link href="./style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container">

        <div class="dotbox">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>




        <div id="userlist-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($row = $stmt->fetch()): ?>
                    <tr>
                        <td><?php echo "{$row['id']}" ?> </td>
                        <td><?php echo "{$row['firstname']} {$row['lastname']}" ?> </td>
                        <td><?php echo "{$row['email']}" ?> </td>
                        <td><?= "{$row['dob']}" ?> </td>
                        <td><?=  "{$row['phone']}" ?> </td>
                        <td><?=  "{$row['address']}" ?> </td>
                    </tr>
                    <?php endwhile; ?>


                </tbody>


            </table>

            <button type="submit" class="submitbtn" onclick="goregister()">Create User</button>
        </div>

    </div>



    <script type="text/javascript">
        function goregister(){
            window.location.href = "./index.php";
        }
        
    </script>
</body>

</html>