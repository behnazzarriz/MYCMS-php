<?php


class Post extends DB
{
 public function getAllPosts(){
     $connection=$this->connect();
     $query="select * from posts";
     return $connection->query($query)->fetchAll(PDO::FETCH_ASSOC);
 }

    public function searchPost($searchQuery)
    {
        $connection=$this->connect();
        $searchQuery='%'.$searchQuery.'%';
        $searchQuery=$connection->quote($searchQuery);
        $query="select * from posts where title like $searchQuery or author like $searchQuery or content like $searchQuery or tags like $searchQuery";
        return $connection->query($query)->fetchAll(PDO::FETCH_ASSOC);



    }
}