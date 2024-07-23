<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view(
        'home'
    );

    // $jobs = Job::all();
    // dd($jobs);

});


Route::get('/jobs', function () {
    //lazing loading
    $jobs = Job::with('employer')->paginate(3);
    return view(
        'jobs',
        ['jobs' => $jobs]
    );  
});


Route::get(
    '/job/{id}',
    function ($id) {
        $job = Job::find($id);
        // dd($job);
        return view('job', ['job' => $job]);

});

Route::get('/contact', function () {
return view('contact');
});