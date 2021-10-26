<?php

namespace App\Http\Controllers;

use App\Model\CodeDiscount;
use Illuminate\Http\Request;

class CodeDiscountController extends Controller
{
    public function index(){
            return view('admin.pages.code.code-discount');
    }
}
