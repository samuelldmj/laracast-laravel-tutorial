<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{

    public function index()
    {
        //lazing loading
        $jobs = Job::with('employer')->latest()->paginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {

        return view('jobs.create');
    }

    //showing existing method using Route Model Binding
    public function show(job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        $jobValidate = request()->validate([
            'decs' => ['required', 'min:3'],
            'salary' => ['required'],
            'employer_id' => ''
        ]);

        $job = Job::create($jobValidate);

        Mail::to($job->employer->user)->send(new JobPosted($job));

        return redirect('/jobs');
    }

    public function edit(job $job)
    {

        // Gate::define('edit-job', function (User $user, Job $job) {

        //     return $job->employer->user->is($user);
        // });

        // Gate::authorize('edit-job', $job);


        //login authorization
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }

        //editing authorization
        // if ($job->employer->user->isNot(Auth::user())) {
        //     abort(403);
        // }


      
        // dd($job);
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        /// to be able to use the id we need to pass it as parameter into the function
        $job->update([
            'decs' => request('decs'),
            'salary' => request('salary')
        ]);

        return redirect('/job/' . $job->id);
    }

    public function destroy(Job $job)
    {

        $job->delete();

        return redirect('/jobs');
    }
}
