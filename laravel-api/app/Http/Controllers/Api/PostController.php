<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
   function index(){
   	$posts = DB::table("posts")->get();
   	return json_encode($posts);
   }
   function store(Request $request){

   	$title=$request->input('title');
   	$content=$request->input('content');
   
   	DB::table("posts")->insert([
   		"title"=>$title,
   		"content"=>$content
   	]);
   	$responseData  = array('data' =>null , );
   		return response()->json($responseData,200); //Tra ve rỗng

   }
}
