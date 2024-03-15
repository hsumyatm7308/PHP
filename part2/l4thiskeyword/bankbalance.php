<?php 

class bankbalance{
    public $accnum;
    public $name;
    public $balance = 0; 

    public function depositamount($amount){

        $this->balance = $this->balance + $amount;

    }


    public function deductamount($amount){
        if($this->balance <= 0){
            echo "No Balance , You do not have money";
        }

        if($this->balance < $amount){
            echo "Insufficient!! , You are trying try to withdraw than your main amount";
        }

      
        $this->balance = $this->balance - $amount;
    }


    public function checkbalance(){
           echo "Your Balance is : ". $this->balance;
    }
}




$bank1 = new bankbalance();
$bank1->accnum = 1000;
$bank1->name = "Aung Aung";
$bank1->balance = 200000;

$bank1->deductamount(210000);
$bank1->depositamount(1000);
$bank1->checkbalance();

echo "<br>";
$bank1->deductamount(10000);
$bank1->checkbalance();


echo "<hr>";

$bank2 = new bankbalance();
$bank2->accnum = 100;
$bank2->name = 100;
$bank2->balance = 100;

?>

<!-- 14OP  -->