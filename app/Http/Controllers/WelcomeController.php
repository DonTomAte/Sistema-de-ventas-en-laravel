<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class WelcomeController extends Controller
{
    public function index(){
    	$products = Product::paginate(5);
    	return view('welcome')->with(compact('products'));
    }
}
