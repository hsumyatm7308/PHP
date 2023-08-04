<?php

// NOte:: Interface can't include body 
// Modifier must be public In interface, cuz we need to overrrite 
// A class must use the (implements)keywords 
interface post
{
    public function setid($id); // Add the $id parameter here
    public function create();
    public function read($id);
    public function update($id, $title);
    public function delete();
}

class myinterface implements post
{
    private $id;
    private $title;

    public function setid($id)
    {
        $this->id = $id;
    }

    public function create()
    {
        echo "I am create article. <br>";
    }

    public function read($id)
    {
        $this->id = $id; // Update the ID here
        echo "I am read article. ID is $this->id <br>";
    }

    public function update($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
        echo "I am update article. ID is $this->id, Title is $this->title<br>";
    }

    public function delete()
    {
        echo "I am delete article. ID is $this->id";
    }
}

echo "This is Interface Properties";

$obj = new myinterface();
$obj->setid(50);
$obj->create();
$obj->read(10);
$obj->update(10, 'this is title');
$obj->delete();

?>