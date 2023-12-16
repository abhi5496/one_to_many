<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\post;

class PostController extends Controller
{
    public function add_post($id){
        $author = Author::find($id);
        $post = new Post();
        $post->title ='NewYork Times';
        $post->cat = 'new city';
        $author->post()->save($post);
    }

    public function show_post($id){
        $post = Author::find($id)->post;
        return $post;
    }
    
}
