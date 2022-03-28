<?php

namespace App\Http\Controllers\Colleges;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CASController extends Controller
{
    public function index()
    {
        return view('pages.colleges.cas');
    }
}
