<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sales extends Controller
{
    public function index(){
        return view("Admin.sales.index");
    }
}
