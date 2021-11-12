<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    
    public function applyJob(Request $request)
    {
        
        return response()->json([
            'status' =>true,
            'message' => 'application submitted',
        ],200);
    }
}
