<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
     
       $products =  \App\product::all();
        return $products;
    }
    function create(){
        
        return view('ProductForm');

    }
    function store(Request $req )
    {
        $name = $req->name;
        $des = $req->description;
        $price = $req->price;
        $p = new \App\product;
        $p->name= $name;
        $p->description = $des;
        $p->price= $price;

        $p->save();

        return "success";
        
    }

}
