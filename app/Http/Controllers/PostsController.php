<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }
    public function insert(Request $request){
        DB::table('posts')->insert([
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
        ]);
        return response('data added successfully');
    }
}
