<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class DashboardController extends Controller
{
    public function index()
    {
        
        $applicants = Applicant::get(); // get all applicants from the Applicants model
        // dd($applicants);
        return view('pages.dashboard',['applicants' => $applicants]);
    }

    public function destroy(Applicant $applicant)
    {
        $applicant->delete();

        return back();
    }
}
