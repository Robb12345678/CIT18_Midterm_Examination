<?php

namespace App\Http\Controllers;
use instance\App\Http\Controllers; 

class ProductController extends controller{ 
    public function index(){ 
        $products=[
            ['name'=> 'Rtx 4090', 'price'=>'100,000.00'],
            ['name'=> 'Gtx 1050 ti', 'price'=> '5,000.00']
        ];
        return view('products', compact('products')); 
    }
}