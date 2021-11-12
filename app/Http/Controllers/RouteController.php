<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    jobs,
    job_type,
    job_categories,
    work_conditions};

class RouteController extends Controller
{
    public function allJobs(Request $request)
    {
        $jobs = jobs::paginate(20);

        return response()->json([
            'status_code' => true,
            'data' => $jobs,
        ],200);
    

    }

    public function viewJob(Request $request, $job)
    {
        $jobs = jobs::where('id', $job)->first();

        if ($jobs)
        {
            return response()->json([
                'status_code' => true,
                'data' => $jobs,
            ],200);
        }

        return '404';
        
    }

    public function searchTitle(Request $request, $jobTitle)
    {
        $jobTitle = ucwords(strtolower($jobTitle));
        $jobs = jobs::where('job_title', $jobTitle)->paginate(20);

        if ($jobs->isNotEmpty())
        {
            return response()->json([
                'status_code' => true,
                'data' => $jobs,
            ],200);
        }

        return '404';
    }

    public function searchType(Request $request, $jobType)
    {
        
        $jobs = jobs::where('job_type', $jobType)->paginate(20);

        if ($jobs->isNotEmpty())
        {
            return response()->json([
                'status_code' => true,
                'data' => $jobs,
            ],200);
        }

        return '404';
     
    }

    public function searchCategory(Request $request,$jobCategory)
    {
        
        $jobs = jobs::where('job_categories', $jobCategory)->paginate(20);

        if ($jobs->isNotEmpty())
        {
            return response()->json([
                'status_code' => true,
                'data' => $jobs,
            ],200);
        }

        return '404';
    }

    public function SearchCondition(Request $request, $workConditions)
    {
        
        $jobs = jobs::where('work_conditions', $workConditions)->paginate(20);

        if ($jobs->isNotEmpty())
        {
            return response()->json([
                'status_code' => true,
                'data' => $jobs,
            ],200);
        }

        return '404';
    }


}
