<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commission;

class CommissionController extends Controller
{
    public function index(){
        $commissions = Commission::orderBy('id', 'desc')->paginate();
        return view('seller.commission.index', compact('commissions'));
    }
}
