<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author(){
        $author = new Author();
        $author->username = 'Rahul ';
        $author->password = 'rahulmakkhi';
        $author->save();
    }

    public function show_author($id){
        $author = Post::find($id)->author;
        return $author;
    }
}
