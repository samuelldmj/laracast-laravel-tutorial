<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Arr;

Route::get('/', function () {
    return view(
        'home'
    );
});


Route::get('/jobs', function () {
    return view(
        'jobs',

        [
            'jobs' => [
                [
                    'id' => 1,
                    'decs' => 'Programmer',
                    'salary' => '$10000',
                ],
                [
                    'id' => 2,
                    'decs' => 'Teacher',
                    'salary' => '$50000'
                ],
                [
                    'id' => 3,
                    'decs' => 'Doctor',
                    'salary' => '$17000'
                ]
            ]
        ]
    );
});


Route::get(
    '/job/{id}',
    function ($id) {

        $jobs = [
            [
                'id' => 1,
                'decs' => 'Programmer',
                'salary' => '$10000',
            ],
            [
                'id' => 2,
                'decs' => 'Teacher',
                'salary' => '$50000'
            ],
            [
                'id' => 3,
                'decs' => 'Doctor',
                'salary' => '$17000'
            ]
        ];

        $job = Arr::first(
            $jobs,
            fn ($e) => $e['id'] == $id
        );
        // dd($job);



        return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
return view('contact');
});