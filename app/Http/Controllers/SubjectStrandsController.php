<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectStrand;
class SubjectStrandsController extends Controller
{
    public function subjectstrand()
    {
    	$subjectstrands = SubjectStrand::all();
    	return view('subjectstrands.index')->with('subjectstrands', $subjectstrands);
    }
}
