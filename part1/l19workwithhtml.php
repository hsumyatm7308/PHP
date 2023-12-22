
<?php

$getdate = getdate();
$getyear = getdate["year"];


$getwday = $getdate["wday"];


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Work With HTML</title>
    </head>
    <body>
        <h1>Welcome to our class</h1>
        
        <?php

        date_default_timezone_set('Asia/Yangon');

        $time = time();
        // $hours = date("G",$time);
        $hours = date("H",$time);
        echo $hours;

        if($hours < 12){
            echo "Good Morning";
        }elseif($hours < 18){
            echo "Good Afternoon";
        }elseif($hours < 22){
            echo "Good Night";
        }
        ?>


       

       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis et debitis, soluta praesentium repellat nulla aliquam impedit odio explicabo facere at eligendi consequuntur officia! Obcaecati eveniet suscipit ex placeat nulla?</p>

       <hr>

       <?php

    //    if($getwday === 0){
    //     echo "Today is Sunday";
    //    }elseif($getwday === 1){
    //     echo "Today is Monday";
    //    }elseif($getwday === 2){
    //     echo "Today is Tuesday";
    //    }elseif($getwday === 3){
    //     echo "Today is Wednesday";
    //    }elseif($getwday === 4){
    //     echo "Today is Thurday";
    //    }elseif($getwday === 5){
    //     echo "Today is Friday";
    //    }elseif($getwday === 6){
    //     echo "Today is Saturday";
    //    }

       ?>


       <?php if($getwday === 0): ?>
        echo "Today is Sunday"
       <?php elseif($getwday === 1): ?>
        echo "Today is Monday"
       <?php elseif($getwday === 2): ?>
        echo "Today is Tuesday"
       <?php  elseif($getwday === 3): ?>
        echo "Today is Wednesday"
      <?php  elseif($getwday === 4) : ?>
        echo "Today is Thurday"
       <?php elseif($getwday === 5): ?>
        echo "Today is Friday"
       <?php elseif($getwday === 6) : ?>
        echo "Today is Saturday"

        <?php else: ?>
            Something Wrong;

        <?php endif; ?>
       

       <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium alias voluptatum nostrum ea quaerat beatae neque. Vero dolore quidem dolorum saepe voluptas mollitia laboriosam pariatur? Repudiandae deserunt tempora id deleniti.</p>

       <footer>
        <small>Copyright <?php echo $getyear; ?>, All right reverse</small>
       </footer>

    </body>

</html>