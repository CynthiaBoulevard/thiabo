<?php

namespace App\Http\Controllers;

  
use App\Product;
use Illuminate\Http\Request;

  
class WelcomeController extends Controller

{

    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $lies = Product::get();
        return view('welcome',compact('lies'));

    }

   
}


