<?php 

// =>Serializable() vs  unserialize()

$staffs = [
    ['aung aung','maung maung','kyaw kyaw','tun tun','thura'],
    ['su su','yu yu','nunu','aye yae','hla hla']
];

echo "<pre>".print_r($staffs,true)."</pre>";

$seridatas = serialize($staffs);
echo $seridatas;
var_dump($seridatas);
echo "<br>";
$unseridatas = unserialize($seridatas);;
echo "<pre>".print_r($unseridatas,true)."</pre>";





?>