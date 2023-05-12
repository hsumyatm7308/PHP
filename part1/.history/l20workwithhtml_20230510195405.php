<?php

$students = [
    [
        "firstname"=>"Aung Kyaw",
        "lastname"=>"Kyaw"
    ],

    [
        "firstname"=>"Tun Tun",
        "lastname"=>"Kyaw"
    ],

    [
        "firstname"=>"Kyaw Kyaw",
        "lastname"=>"Aung"
    ],

    [
        "firstname"=>"Hsu Hsu",
        "lastname"=>"Htay Lwin"
    ],

    [
        "firstname"=>"Thura Tun",
        "lastname"=>"Kyaw"
    ],
]

?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Work With HTML</title>
    </head>
    <body>
        <h1>Data Land  <?php echo "Student List" ?> </h1>

        <ul>
            <li><?php echo $students[0]['firstname']." ".$students[0]['lastname'] ?></li>
            <li><?php echo $students[1]['firstname']." ".$students[0]['lastname'] ?></li>
            <li><?php echo $students[2]['firstname']." ".$students[0]['lastname'] ?></li>
            <li><?=  $students[3]['firstname']." ".$students[0]['lastname'] ?></li>
            <li><?=  $students[4]['firstname']." ".$students[0]['lastname'] ?></li>

        </ul>
        
    </body>
</html> -->


<!DOCTYPE html>
<html>
    <head>
        <title>Work With HTML</title>
    </head>
    <body>
        <h1>Data Land  <?php echo "Student List" ?> </h1>

        <ul>
         
        <?php foreach($students as $student): ?> 
            <li>
                <?php echo "{$student['firstname']} {$student['lastname']}"; ?>
            </li>
            
        <?php endforeach; ?>

        </ul>

        <ul>
         
         <?php foreach($students as $student): ?> 
             <li>
                 <?= "{$student['firstname']} {$student['lastname']}"; ?>
             </li>
             
         <?php endforeach; ?>
 
         </ul>
         
        
    </body>
</html>