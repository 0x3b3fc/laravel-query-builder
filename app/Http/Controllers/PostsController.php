<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        return view('posts.index',compact('posts'));
    }
    public function create(){
        return view('posts.create');
    }
    public function edit($id){
        $post = DB::table('posts')->find($id);
        return view('posts.edit',compact('post'));
    }
    public function insert(Request $request){
        DB::table('posts')->insert([
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
        ]);
        return redirect('/posts');
    }
    public function update($id, Request $request){
        DB::table('posts')->where('id',$id)->update([
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
        ]);
        return redirect()->route('posts.index');
    }

    public function destroy($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('posts.index');
    }
    public function delete_all(){
        DB::table('posts')->delete();
        return redirect()->route('posts.index');
    }

}
