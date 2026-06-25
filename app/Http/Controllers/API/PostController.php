<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model
use App\Interfaces\PostInterface ;

class PostController extends Controller
{
    //

    public $PostInterface;

    public function __construct(PostInterface $PostInterface){
        $this->PostInterface = $PostInterface; 
    }

    public function index(){
        return $this->PostInterface->getAllPosts();
    }
    public function show($id){
        return $this->PostInterface->getPostById($id);
    }

    public function store(Request $request){
        return $this->PostInterface->createPost($request->all());

    }

}

