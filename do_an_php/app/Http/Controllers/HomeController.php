<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $acc = Account::all()->count();
        $prd = Product::all()->count();
        $inv = Invoice::all()->count();
        $rv = Review::all()->count();
        return view('index', ['account' => $acc, 'product' => $prd, 'invoice' => $inv, 'review' => $rv]);
    }
}
