<?php 

$getdatas = file_get_contents("./l43studentdb.json");
$datasde = json_decode($getdatas,true); //array 
echo "<pre>".print_r($datasde,true)."</pre>";



// =>Create 
$newsdata = [
    [
       "id" => 11,
       "name" => "Pa Pa",
       "city" => "Mandalay"
    ],
    [
        "id" => 12,
        "name" => "Phyu Phyu",
        "city" => "Yangon"
     ],
     [
        "id" => 13,
        "name" => "Win Win",
        "city" => "bago"
     ]
];


// path 1 > sudo chmod 777 -R l43studentsdb.json 
// foreach($newsdata as $newdata){
//     array_push($datasde,$newdata);
//     file_put_contents("./l43studentdb.json",json_encode($datasde));
// }


// =>Read 

// foreach($datasde as $datas){

//     foreach ($datas as $key=> $data){
//         echo $key . "=" . $data . "br>";
//     }
//     echo "<hr>";
// }


// =>Update 
foreach($datasde as $key=>$datas){
    echo $datas;
    echo "<pre>".print_r($datas,true)."</pre>";
    echo $key; //index 0 to 12 

    echo "<pre>".print_r($datasde[$key],true)."</pre>";
    echo $datas['id'];

    if($datas['id'] === 9){
        // id 
        $datasde[$key]["name"] = "thandar";

        // index
        // $datasde[8]["name"] = "sandar";

    }
}

//  file_put_contents("./l43studentdb.json",json_encode($datasde));

//  // =>Read 
// foreach($datasde as $datas){

//     foreach ($datas as $key=> $data){
//         echo $key . "=" . $data . "br>";
//     }
//     echo "<hr>";
// }



// => Delete 

$idxs = [];

foreach($datasde as $key=>$datas){
    // echo "<pre>".print_r($data,true)."</pre>";
    if($datas["id"] === 6){
        $idxs[] = $key;

    echo "<pre>".print_r($idxs,true)."</pre>";

    }

};

foreach($idxs as $idx){
    unset($datasde[$idx]);
}


$datasde = array_values($datasde);
echo "<pre>".print_r($datasde,true)."</pre>";


file_put_contents("./l43studentdb.json",json_encode($datasde));

// =>Read 
foreach($datasde as $datas){

   foreach ($datas as $key=> $data){
       echo $key . "=" . $data . "br>";
   }
   echo "<hr>";
}





// $colors = ['red',"green","blue"];
// unset($colors[1]);
// $colors = array_values($colors);
// echo "<pre>".print_r($colors,true)."</pre>";

// $infos = ["name"=>"aung aung","age"=>20,"city"=>"Yangon"];
// unset($infos["age"]);
// $infos = array_values($infos);
// echo "<pre>".print_r($infos,true)."</pre>";


?>