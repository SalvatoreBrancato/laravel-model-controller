<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
    $movies = Movie::All();
    return view( 'pages.home', compact( 'movies' ) );
   }
}
