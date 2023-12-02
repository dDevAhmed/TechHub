<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id', 'title', 'type', 'level', 'tags', 'summary', 'description', 'logo', 'company', 'location', 'email', 'website',  'user_id'
    ];

}
