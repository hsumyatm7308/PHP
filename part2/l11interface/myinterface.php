<?php

// NOte:: Interface can't include body 
// Modifier must be public In interface, cuz we need to overrrite 
// A class must use the (implements)keywords 
interface artical
{

    const CAPTION = "This is new artical for sprot";
    public function create();
    public function read($id);
    public function update($id, $title);
    public function delete();
}


class myinterface implements artical{

    public function createpost(){
        echo "I am fro  create post.".self::CAPTION . "<br>";
    }

    public function setid()
    {
        echo "I am setid ID. <br>";

    }

    public function create()
    {
        echo "I am create article. <br>";
    }
    public function read($id)
    {
        echo "I am create article. ID is ${id} <br>";

    }
    public function update($id, $title)
    {

        echo "I am create article. ID is ${id} . Title is ${title}<br>";


    }

    public function delete()
    {

        // echo "I am delte article. ID is ${id}";

    }

}


echo "This is Interface";

$obj = new myinterface();
$obj->setid();
$obj->create();
$obj->read(10);
$obj->update(10, 'this is title');
// $obj->delete(10); //can't 

?>