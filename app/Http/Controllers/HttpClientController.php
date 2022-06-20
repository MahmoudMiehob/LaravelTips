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


}
