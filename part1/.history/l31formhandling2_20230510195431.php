

<?php

$email = $name = $password = $bio = $favcolor = "";

if($_SERVER["REQUEST METHOD"]==="POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $city = $_POST["city"];
    $favcolor = $_POST["favcolor"];


}

?>





<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

<div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="">

</div>

<div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="">
    
</div>

<div>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="">
    
</div>

<div>
    <label for="city">City</label>
    <input type="text" name="city" id="city" class="">
    
</div>

<div>
    <label >Fav Color</label>
    <input type="radio" name="favcolor" id="favrd" class="" value="Red Color"> <label for="favrd">Red</label>
    <input type="radio" name="favcolor" id="favgn" class="" value="Green Color"> <label for="favgn">Green</label>
    <input type="radio" name="favcolor" id="favbl" class="" value="Blue Color"> <label for="favbl">Blue</label>
    
</div>



<div>
    <label for="bio" >Bio</label>
    <textarea name="bio" id="bio" class=""   rows="5" cols="50"></textarea>
</div>



<button type="submit" >Submit</button>
 
</form>


<?php

    echo "<h2>My Information Are.....</h2>";
    echo "Name is $name <br>";
    echo "Email is $email <br>";
    echo "Passowrd is $password <br>";
    echo "City is $city <br>";
    echo "Fav Color is $favcolor <br>";
    echo "Bio is $bio <br>";





?>



</body>

</html>
