<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index($id): View
    {
        $products = DB::select('select * from products where category_id=?', [$id]);
 
        return view('category.products', ['products' => $products]);
    }
}
