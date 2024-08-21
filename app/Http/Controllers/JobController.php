<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

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
        request()->validate([
            'decs' => ['required', 'min:3'],
            'salary' => ['required'],
            'employer_id' => ''
        ]);

        return redirect('/jobs');
    }

    public function edit($id)
    {

        $job = Job::findOrFail($id);
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
