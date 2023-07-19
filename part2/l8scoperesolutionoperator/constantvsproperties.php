<?php

echo "hay";

class constantvsproperties
{

    const ARTICLE = "This is new article for SPORT";
    const TOPIC = "This is new topic for SPORT";
    public $post = "This is new post for SPORT";

    public function contentone()
    {
        echo self::ARTICLE;
        echo "<br>";
        echo self::TOPIC;
        echo "<br>";
        echo $this->post;
        echo "<br>";

    }

}


class baby extends constantvsproperties
{
    const ARTICLE = "This is new article for POLITICLE";
    const TOPIC = "This is new topic for POLITICLE";
    public $post = "This is new post for POLITICLE";

    public function contentwo()
    {
        echo self::ARTICLE;
        echo "<br>";
        echo self::TOPIC;
        echo "<br>";
        echo $this->post;
        echo "<br>";

    }

}


echo "This is Constant vs Properties" . "<br>";

$obj = new constantvsproperties();
$obj->contentone();

echo "<hr>";


$bb = new baby();
$bb->contentone();

echo "<hr>";

$bb = new baby();
$bb->contentwo();

echo "<hr>";

?>