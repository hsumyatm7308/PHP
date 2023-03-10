<?php
//Variables 

// variable scope 
// (i)Global  Variable scope
// (ii)Local  Variable Scope
// (iii)Static  Variable Scope




$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo $fullname;
print $job;
echo "$fullname";    //variable  ထုတ်ပေး
echo '$fullname'; //result = $fullname
echo `$job`; //can't 

echo "<br/>";

echo "My name is $fullname";    //result = My name is U Kyaw Kyaw;
echo "<br/>";

echo "My name is ${fullname}"; //result = My name is U kyaw Kyaw;
echo "<br/>";

echo 'My name is ${fullname}'; //result = My name is $fullname
echo "<br/>";

echo "I am {$job}"; //result = I am developer
echo "<br/>";


echo 'He\'s my father , he is a $job'; //result = He's my father, he is a $job
echo "He's my father , he is a \$job"; //result = He's my father, he is a $job
echo "He/s my father , he is a \${job}"; //result = He's my father, he is a ${job}
echo "He/s my father , he is a \{$job}"; //result = He's my father, he is a \{Developer}
echo "He/s my father , he is a {\$job}"; //result = He's my father, he is a {$job}


$gender = print 'female';  //result = femalt
// $nation = echo 'burma'; //result = error

echo "<hr/>";

// Concat (.)

$firstname = "Aung";
$lastname = 'Kyaw Kyaw';

echo $firstname;
echo $lastname;
echo "<br/>";
echo $firstname.$lastname;
echo "<br/>";
echo $firstname.' '.$lastname;

// Comments 

#Single Line Comment 

// Multi Line Comment 
/* comment 1 
 comment 2 
 comment 3 */

?>

<!-- 20IN  -->