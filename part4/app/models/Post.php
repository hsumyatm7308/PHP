<?php


class Post
{
    private $db;

    public function __construct()
    {

        $this->db = new Database();

    }

    public function allposts()
    {
        // $this->db->dbquery("SELECT * FROM posts");

        $this->db->dbquery("SELECT *,
         posts.id AS postid,
         posts.created_at AS publicdate  FROM posts
        INNER JOIN users ON posts.user_id = users.id
        ORDER BY posts.created_at DESC
       ");


        $rows = $this->db->getmultidata();
        return $rows;
    }



}





?>

<!-- 
CREATE TABLE IF NOT EXISTS posts(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
content TEXT,
user_id INT,
created_at TIMESTAMP DEFAULT now(),
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
FOREIGN KEY(user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
);


DESC posts;
 -->