<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Perfile extends Controller
{
    public function index(){
        return view("Admin.perfile.index");
    }
}
