<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Tag;
use Session;

class TagController extends Controller
{

    public function tag(){
        $tag=Tag::orderBy('tag_id','DESC')->get();
        return view('admin.tag.all',compact('tag'));
    }
    public function tag_add(){
        return view('admin.tag.add');
    }
    public function tag_insert(Request $request){
        $insert=Tag::insert([
            'tag_name'=>$request['tag_name'],
        ]);
        if($insert){
            return redirect('tag/add');
        }
    }
}
