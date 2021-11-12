<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobApplicationFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\applications;

class ApplicationController extends Controller
{
    
    public function applyJob(Request $request)
    {
        
        $file = $request->file('cv');
        $originalFile = $file->getClientOriginalName();
        $uniqueFileName = time() . $file->getClientOriginalName();
        $path = $request->file('cv')->storeAs('public',$uniqueFileName);

        applications::create([
            'job_id' =>$request->job_id,
            'name' => $request->name,
            'cover_letter' => $request->cover_letter,
            'cv_path' => $path
        ],200);
       
    }
}
