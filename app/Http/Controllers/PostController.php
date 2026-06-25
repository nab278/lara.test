<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Models\Post;
use App\Interfaces\PostInterface;

class PostController extends Controller
{
    //
    public $PostInterface;
    public function __construct(PostInterface $PostInterface)
    {
        $this->PostInterface = $PostInterface;
    }

    public function index()
    {
        $posts = $this->PostInterface->getAllPosts();
        return view('Posts.PostIndex')->with(['posts' => $posts]);
    }

    


}
