<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Arr;

Route::get('/', function () {
    return view(
        'home'
    );
});


Route::get('/job', function () {
    return view(
        'job',

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


Route::get('/job/{id}', function ($id) {

    dd($id);
    return view('contact');
});

Route::get('/contact', function () {
return view('contact');
});