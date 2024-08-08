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
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view(
        'jobs.index',
        ['jobs' => $jobs]
    );  
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get(
    '/job/{id}',
    function ($id) {
        $job = Job::find($id);
        // dd($job);
        return view('jobs.show', ['job' => $job]);
    }
);

Route::post('/jobs', function () {
    // dd(request()->all());
    // return view('jobs.create');

    request()->validate([
        'decs' => ['required', 'min:3'],
        'salary' => ['required'],
        'employer_id' => ''
    ]);

    Job::create([
        'decs' => request('decs'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


Route::get('/contact', function () {
return view('contact');
});
