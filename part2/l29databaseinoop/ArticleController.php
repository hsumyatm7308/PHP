<?php

require_once('./Article.php');

$article = new Article();

// =>Select 
// echo "<pre>". print_r($article->getarticlebyid(1),true). "</pre>";
// var_dump($article->getarticles());
// var_dump($article->getarticlebyid(1));


// =>Insert 
// $data = ['title'=>'this is new article 11','content'=>'Lorem ipsum, placeholder or dummy text used in typesetting and graphic design for previewing','user_id'=>3];
// $article->insertarticle($data);


// =>Update 
$data = [ 'id'=>12,'title'=>'this is new article 12','content'=>'Lorem ipsum, placeholder or dummy text used in typesetting and graphic design for previewing','user_id'=>4];
$article->updatearticle($data);



// =>delete 
$article->deletearticle(12);

?>