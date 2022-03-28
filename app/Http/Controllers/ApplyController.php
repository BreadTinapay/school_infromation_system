<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplyController extends Controller
{
    public function index()
    {
        return view('pages.apply');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'studentid' => 'required|max:255',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'studentid' => 'required',
        ]);

        $college = $request->college;
        $name = array($request->lastname, $request->firstname);

        if($college === "CAS")
        {
            $program = "BSIT";
            $coarseCode = array('IT_206', 'IT_146', 'IT_484', 'IT_187', 'IT_385');
            $coarseName = array('IT Fundamentals', 'Database Management System', 'Web Development', 'Data Structures', 'System Analysis and Design');
            $arrlegnth = count($coarseName);

            for ($x = 0; $x < $arrlegnth; $x++) {
                Applicant::create([
                    'NAME' => join(", ", $name),
                    'STUDENT_NUMBER' => $request->studentid,
                    'COLLEGE' => $request->college,
                    'PROGRAM' => $program,
                    'COARSE_CODE' => $coarseCode[$x],
                    'COARSE_NAME' => $coarseName[$x],
                ]);
            }
        } elseif ($college === "COFED"){
            $program = "BSED";
            $coarseCode = array('BSED_160', 'BSED_490', 'BSED_457', 'BSED_130');
            $coarseName = array('Principles of Teaching', 'Facilitating Learning', 'Assessment of Student Learning', 'Social Dimensions of Education');
            $arrlegnth = count($coarseName);

            for ($x = 0; $x < $arrlegnth; $x++) {
                Applicant::create([
                    'NAME' => join(", ", $name),
                    'STUDENT_NUMBER' => $request->studentid,
                    'COLLEGE' => $request->college,
                    'PROGRAM' => $program,
                    'COARSE_CODE' => $coarseCode[$x],
                    'COARSE_NAME' => $coarseName[$x],
                ]);
            }
        } elseif ($college === "CME"){
            $program = "BSTM";
            $coarseCode = array('BSTM_453', 'BSTM_163', 'BSTM_294');
            $coarseName = array('Total Quality Management', 'Food and Beverage Service Procedures', 'Tourism Planning and Development');
            $arrlegnth = count($coarseName);

            for ($x = 0; $x < $arrlegnth; $x++) {
                Applicant::create([
                    'NAME' => join(", ", $name),
                    'STUDENT_NUMBER' => $request->studentid,
                    'COLLEGE' => $request->college,
                    'PROGRAM' => $program,
                    'COARSE_CODE' => $coarseCode[$x],
                    'COARSE_NAME' => $coarseName[$x],
                ]);
            }
        }

        return redirect()->route('home');
    }
}
