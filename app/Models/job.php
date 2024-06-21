<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {

        return
            [
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
    }

    public static function find(int $id): array
    {
        $job = Arr::first(
            static::all(),
            fn ($e) => $e['id'] == $id
        );

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
