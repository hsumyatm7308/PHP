<?php

// array_chunk(); 
// array_chunk(array,size,preserve_key); 

$couples = ["aung aung", "su su ", "nu nu", "kyaw kyaw", "mya mya", "tun tun","maung maung","yin yin"];
echo "<pre>".print_r(array_chunk($couples,2),"false")."</pre>";
echo array_chunk($couples,2)[0][1];

echo "<pre>".print_r(array_chunk($couples,2,true),"true")."</pre>";
echo "<pre>".print_r(array_chunk($couples,2,false),"true")."</pre>";


?>


<!-- 17AM  -->