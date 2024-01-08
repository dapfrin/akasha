<?php

// AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Retrieve products from the database
        $products = Product::all();

        // Pass the $products variable to the view
        return view('admin', ['products' => $products]);
    }

    // Other methods in your controller...
}

