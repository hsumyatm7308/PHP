<?php

ini_set('display_errors',1);
require_once('./Database.php');

class Article{
    private $db;

    
    public function __construct(){
        $this->db = new Database();
    }


    // Get all articles 
    public function getarticles(){
        $this->db->dbquery("SELECT * FROM articles");
        return $this->db->getmultidata();
    }


    public function getarticlebyid($id){
        $this->db->dbquery("SELECT * FROM articles WHERE id=:id");
        $this->db->dbbind(":id",$id);
        return $this->db->getsingledata();

    }



    // insert data 
    public function insertarticle($data){
        $this->db->dbquery("INSERT INTO articles(title,content,user_id) VALUE(:title,:content,:userid)");
        $this->db->dbbind(":title",$data['title']);
        $this->db->dbbind(":content",$data['content']);
        $this->db->dbbind(":userid",$data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }

    
       // update data 
       public function updatearticle($data){
        $this->db->dbquery("UPDATE articles SET title =:title,content =:content,user_id=:userid WHERE id = :id");
        $this->db->dbbind(":id",$data['id']);
        $this->db->dbbind(":title",$data['title']);
        $this->db->dbbind(":content",$data['content']);
        $this->db->dbbind(":userid",$data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }


    // delete data 
    public function deletearticle($id){
        $this->db->dbquery("DELETE FROM articles WHERE id = :id");
        $this->db->dbbind(':id',$id);
        return $this->db->dbexecute();
    }

}


?>