<?php

namespace App\Interfaces;

interface PostInterface
{
    //

    public function getAllPosts();
    public function getPostById($id);
    public function createPost($data);
    public function updatePost($id,$data);
    public function deletePost($id);
    public function searchPost($search);
    public function getPostByCategory($category);
    public function getPostByTag($tag);
    public function getPostByAuthor($author);
    public function getPostByDate($date);
    public function getPostBySearch($search);
    public function getPostByFilter($filter);

}
