<?php

namespace App\Repositories;
use App\Interfaces\PostInterface;
use App\Models\Post;

class PostRepository implements PostInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

   public function getAllPosts(){
       return Post::simplePaginate(5);  
   }

   // implement all the functions in PostInterface.php
   public function getPostById($id){
       return Post::find($id);

   }

   public function createPost($data){
        return Post::create([
            'title' => $data['title'],
            'slug' =>  $data['slug'],
            'body' => $data['body'],
            'is_published' => $data['is_published'],
            'created_at' => Now(),
           
        ]);
    }

    public function updatePost($id,$data){
        return Post::where('id',$id)->
        update([
            'title' => $data['title'],
            'slug' =>  $data['slug'],
            'body' => $data['body'],
            'is_published' => $data['is_published'],
            'updated_at' => Now(),

        ]);

    }

    public function deletePost($id){
        return Post::where('id',$id)->delete();     
    }

    public function searchPost($search){
        return Post::where('title','LIKE','%'.$search.'%')->get();
    }

    public function getPostByCategory($category){ // Not in USE
        return Post::where('category_id',$category)->get();

    }

    public function getPostByTag($tag){ // Not In USE
        return Post::whereHas('tags',function ($query) use ($tag){
            $query->where('name','LIKE','%'.$tag.'%');

        })->get();

    }
    public function getPostByAuthor($author){ 
        return Post::where('user_id',$author)->get();

    }


    public function getPostByDate($date){
        return Post::where('created_at', 'LIKE','%'.$date.'%')->get();

    }

    public function getPostBySearch($search){
       return Post::where('title','LIKE','%'.$search.'%')
       ->orWhere('body','LIKE','%'.$search.'%')
       ->get();
    }

    public function getPostByFilter($filter){
        return Post::where('category_id',$filter)->
        orWhere('user_id',$filter)->get();

    }

      




}
