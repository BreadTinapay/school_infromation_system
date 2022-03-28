<?php

namespace App\Http\Controllers\Colleges;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class COFEDController extends Controller
{
    public function index()
    {
        return view('pages.colleges.cofed');
    }
}
