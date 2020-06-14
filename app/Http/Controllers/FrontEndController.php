<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Str;
class FrontEndController extends Controller
{
        public function home(Request $request){
            $common_content=array();
            $common_content['categories']=Category::all();
            $products =Product::all();

            $rated_products = Product::where('rating', '>=', 3)->limit(4)->get();
            return view('frontEnd.home',compact('common_content','products','rated_products'));
        }
}
