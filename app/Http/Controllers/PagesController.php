<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Department;

class PagesController extends Controller
{
    public function admin()
    {
        $applicants = Applicant::all();
        $departments = Department::all()->sortByDesc('applicants_count');

        return view('pages.admin', compact('applicants', 'departments'));
    }
}
