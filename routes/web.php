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

//all jobs
Route::get('/jobs', function () {
    //lazing loading
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view(
        'jobs.index',
        ['jobs' => $jobs]
    );
});

//create a new job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//show existing job
Route::get(
    '/job/{id}',
    function ($id) {
        $job = Job::findOrFail($id);
        // dd($job);
        return view('jobs.show', ['job' => $job]);
    }
);

//store a new job
Route::post('/jobs', function () {
    // dd(request()->all());
    // return view('jobs.create');

    request()->validate([
        'decs' => ['required', 'min:3'],
        'salary' => ['required'],
        'employer_id' => ''
    ]);

    // Job::create([
    //     'decs' => request('decs'),
    //     'salary' => request('salary'),
    //     'employer_id' => 1
    // ]);

    return redirect('/jobs');
});

//edit job
Route::get(
    '/job/{id}/edit',
    function ($id) {
        $job = Job::findOrFail($id);
        // dd($job);
        return view('jobs.edit', ['job' => $job]);
    }
);

//update job
Route::patch(
    '/job/{id}',
    // to be able to use the id we need to pass it as parameter into the function
    function ($id) {
        $job = Job::findOrFail($id);

        $job->update([
            'decs' => request('decs'),
            'salary' => request('salary')
        ]);


        return redirect('/job/' . $job->id);
    }
);

//delete job
Route::delete(
    '/job/{id}',
    function ($id) {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/jobs');
    }

);


Route::get('/contact', function () {
    return view('contact');
});
