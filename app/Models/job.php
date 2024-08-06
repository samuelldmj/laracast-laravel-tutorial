<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';

    protected  $fillable = ['decs', 'salary', 'employer_id'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    //job model  relationship with tag models is a hastomany.
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
