<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use DB;

class PostController extends Controller
{
    public function index()
    {
    	$posts = DB::table('posts')->get();
       
    	return view('post.index',compact('posts'));

    }
    public function create(Request $request)
    {
    	$request ;
    	return view('post.create');

    	return back();
    }
    public function store(Request $request)
    {
    	 $this->validate($request, [
      'title' => 'required',
      'post_content' => 'required'
    ]);
    	$posts = new Posts();
    	$posts->title = $request->get('title');
    	$posts->post_content= $request->get('post_content');
    	$posts->save();
 		
 		//return view('post.index');
 		return back();
    }
    public function show($postid)
    {
        $post = DB::table('posts')->where('id', $postid)->first();
        return view('post.single', compact('post'));
    }
}
