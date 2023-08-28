<?php

namespace App\Http\Controllers;

// use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index ()
    {
        return view('front-end.home.index');
    }
    // public function category($id)
    // {
    //     return view('front-end.category.index',[
    //         'products' => Product::where('category_id',$id)->orderBy('id', 'desc')->get()
    //     ]);
    // }

//     public function detail()
//     {
//         return view('fronted.detail.index');
//     }
// }
}