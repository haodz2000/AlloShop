<?php

namespace App\Http\Controllers;

use App\Model\CodeDiscount;
use Illuminate\Http\Request;

class CodeDiscountController extends Controller
{
    public function index(){
            return view('admin.pages.code.code-discount');
    }

    public function show(){
        $code = CodeDiscount::select('*')->get();
        return view('admin.pages.code.code-discount', [
            'code' => $code
        ]);
    }
}
