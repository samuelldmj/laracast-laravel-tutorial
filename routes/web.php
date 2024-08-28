<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view(
        'home'
    );

    // $jobs = Job::all();
    // dd($jobs);

});

//all jobs
// Route::get('/jobs', [JobController::class, 'index']);

// //create a new job
// Route::get('/jobs/create', [JobController::class, 'create']);



// //=======================================================================================================

// //show existing job
// // Route::get(
// //     '/job/{id}',
// //     function ($id) {
// //         $job = Job::findOrFail($id);
// //         // dd($job);
// //         return view('jobs.show', ['job' => $job]);
// //     }
// // );


// Route::get(
//     '/job/{job}',
//     [JobController::class, 'show']

// );
// //==========================================================================================================

// //store a new job
// Route::post('/jobs', [JobController::class, 'store']);

// //edit job
// Route::get(
//     '/job/{id}/edit',
//     [JobController::class, 'edit']

// );

// //update job
// Route::patch(
//     '/job/{id}',
//     // to be able to use the id we need to pass it as parameter into the function
//     [JobController::class, 'update']
// );

// //delete job
// Route::delete(
//     '/job/{id}',
//     [jobController::class, 'destroy']

// );





//using grouping route
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs',  'index');
    Route::get('/jobs/create',  'create');
    Route::get('/job/{job}', 'show');
    Route::post('/jobs',  'store');
    Route::get('/job/{id}/edit', 'edit');
    Route::patch('/job/{job}', 'update');
    Route::delete('/job/{id}', 'destroy');
});


//using route resource
// Route::resource('jobs', JobController::class);

Route::get('/contact', function () {
    return view('contact');
});

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, "store"]);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, "store"]);

Route::post('/logout', [SessionController::class, "destroy"]);