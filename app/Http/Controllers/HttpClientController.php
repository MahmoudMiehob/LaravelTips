<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{

    public function getAllPost(){
    $posts = Http::get("https://jsonplaceholder.typicode.com/posts") ; 
    return $posts->json() ; 
    }
    
    
    public function showPost($id){
    $post = Http::get("https://jsonplaceholder.typicode.com/posts/".$id) ; 
    return $post->json() ; 
    }
    
    
    public function addPost(){
    $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
        'userId' => 1 ,
        'title' => 'hello' ,
        'body' => 'mahmoud' 
    ]) ; 
    return $post->json() ; 
    }
    
    
    
    public function updatePost(){
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'hello' ,
            'body' => 'mahmoud' 
        ]) ; 
        return $post->json() ; 
    }
    
    
    
    public function deletePost($id){
        $post = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json() ; 
    }


}
