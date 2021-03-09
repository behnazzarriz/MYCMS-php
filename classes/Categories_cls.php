<?php


class Categories extends DB
{

    public  function getAllCategories(){
        $connection=$this->connect();
        $query="select * from category";
        return $connection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteCategoryByID($catId)
    {
        $connection=$this->connect();
        $qCatId=$connection->quote($catId);
        $query="delete from category where id=$qCatId";
        $connection->query($query);
    }

    public function addCategory($catName, $catDescription)
    {
        $connection=$this->connect();
        $qCatName=$connection->quote($catName);
        $qCatDescription=$connection->quote($catDescription);
        $query="insert into category (name,description) values ($qCatName,$qCatDescription)";
        $connection->query($query);

    }

    public function getCategoryById($catId)
    {
        $connection=$this->connect();
        $qCatId=$connection->quote($catId);
        $query="select * from category where id=$qCatId";
        $result=$connection->query($query)->fetchAll(PDO::FETCH_ASSOC);
        if(count($result)>0){
            return $result[0];
        }
    }

    public function updateCategory($catId,$catName,$catDescription)
    {
        $connection=$this->connect();
        $qCatId=$connection->quote($catId);
        $qCatName=$connection->quote($catName);
        $qCatDescription=$connection->quote($catDescription);
        $connection->query("update category set name=$qCatName , description=$qCatDescription where id=$qCatId");
    }
}