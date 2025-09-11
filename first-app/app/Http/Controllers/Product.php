<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    //
    public function index()
    {

   //compact method 
        // $name="Haris";
        // $email="haris@gmail.com";
        
        // return view("home",compact("name","email"));

       

        // return view("home",$data);

        //With Method
        // $name="abc";
        // $email="abc@gmail.com";

        // return view("home")
        // ->with("name",$name)
        // ->with("email",$email);



        //Compact method
        //   $name="Haris Naseer";
        // $email="haris258@gmail.com";
        // return view('product.index',compact("name","email"));

         //associative array
        // $data=[
        //     "name"=>"Sir Haris",
        //     "email"=>"haris@aptechnorth.edu.pk",
        //     "age"=>25
        // ];

        // return view('product.index',$data);


           //With Method
        $name="abc";
        $email="abc@gmail.com";

        return view('product.index')
        ->with("name",$name)
        ->with("email",$email)
        ->with("age",25)
        
        ;
    }
    public function addProduct()
    {
        return view('product.add');
    }
    public function welcome() {
    return view('welcome');
}

public function about () {
    return view('about');
}
}
