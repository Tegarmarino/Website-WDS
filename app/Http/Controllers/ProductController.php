<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Membuat function index
    public function index(){
        return view('index', [
            'products' => product::index()
        ]);
    }
}
