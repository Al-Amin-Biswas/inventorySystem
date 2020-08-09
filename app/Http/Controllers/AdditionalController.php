<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    public function index(){
        return view('backend.category.viewCategory');
    }
}
