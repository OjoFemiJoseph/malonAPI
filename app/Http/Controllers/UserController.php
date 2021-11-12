<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobs;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = $request->user()->id;
        $jobs = jobs::where('user_id', $id)->get();

        return response()->json([
            'status' => true,
            'data' => $jobs,
        ],200);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        jobs::create([
            'user_id' => $request->user()->id,
            'job_title' => $request->job_title,
            'job_type'=> $request->job_type,
            'job_categories'=> $request->job_categories,
            'job_descriptions'=> $request->job_descriptions,
            'work_conditions' => $request->work_conditions,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Job has been published',
        ],200);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {   
        $user_id = $request->user()->id;
        $jobs = jobs::where('id', $id)->first();

        
        if($job && $user_id == $jobs->user_id)
        {
            return response()->json([
                'status' => true,
                'data' => $jobs,
            ],200);
        
        }

        return response()->json([
            'status' => true,
            'data' => $jobs,
        ],403);
    
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = $request->user()->id;
        $jobs = jobs::where('id', $id)->first();

        
        if($job && $user_id == $jobs->user_id)
        {
            jobs::where('id', $id)->update([
                'user_id' => $request->user()->id,
                'job_title' => $request->job_title,
                'job_type'=> $request->job_type,
                'job_categories'=> $request->job_categories,
                'job_descriptions'=> $request->job_descriptions,
                'work_conditions' => $request->work_conditions,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'job has been updated',
            ],200);
        }

        return response()->json([
            'status' => true,
            'message' => "cant find the job",
        ],401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = $request->user()->id;
        $jobs = jobs::where('id', $id)->first();

        
        if($job && $user_id == $jobs->user_id)
        {
            $jobs->delete();
            return response()->json([
                'status' => true,
                'message' => 'job has been deleted',
            ],200);
        }

        return response()->json([
                'status' => true,
                'message' => "cant find the job",
            ],401);
    }
}
