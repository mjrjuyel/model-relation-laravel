<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Post;
use App\models\Tag;
use Session;

class PostController extends Controller
{
    public function post_add(){
        return view('admin.post.add');
    }
    public function post_insert(Request $request){
        $tag=Tag::all();
        $insert=Post::insert([
            'post_name'=>$request['post_name'],
        ]);
        $insert->true->tags()->attach($tags);
        
        if($insert){
            return redirect('post_insert');
        }
    }
}
