<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
 
class ProductController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index($id): View
    {
        $product = DB::select('select * from products where id=?', [$id] );
 
        return view('product.details', ['product' => $product]);
    }
}