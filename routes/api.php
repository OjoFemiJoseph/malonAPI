<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    UserController,
    RouteController,
    ApplicationController};
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v1')
    ->group(function(){

        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/register', [AuthController::class, 'register']);

        // browse through jobs
        Route::get('/jobs',[RouteController::class, 'allJobs']);

        //view job
        Route::get('/jobs/{job}',[RouteController::class, 'viewJob']);

        //apply for job
        Route::get('/jobs/{job}/apply',[ApplicationController::class, 'applyJob']);


        // search for jobs
        Route::get('/jobs/title/{jobTitle}',[RouteController::class, 'SearchTitle']);
        Route::get('/jobs/type/{jobType}',[RouteController::class, 'SearchType']);
        Route::get('/jobs/category/{jobCategory}',[RouteController::class, 'SearchCategory']);
        Route::get('/jobs/work/{workConditions}',[RouteController::class, 'SearchCondition']);
        

        Route::middleware('auth:sanctum')
            ->group(function(){
                //create , update and delete
                Route::apiResource('user',UserController::class);
                
                Route::post('/logout',[AuthController::class, 'logout']);
            });

    });
