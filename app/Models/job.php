<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';

    protected  $fillable = ['decs', 'salary'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}

