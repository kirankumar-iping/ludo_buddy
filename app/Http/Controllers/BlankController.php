<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlankController extends Controller
{
    public function index()
    {
        return view('blank.blank');
    }
}