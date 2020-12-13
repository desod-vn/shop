<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Product;

use App\Models\Type;

class ProductController extends Controller
{
    public function index() 
    {
        $data = Product::orderBy('id', 'DESC')->get();
        $title = "Danh sách sản phẩm";
        $main  = "product";
        $staticLink = "/admin/products/";
        return view('admin.board.products.index', compact('staticLink', 'data', 'title', 'main'));
    }
}
