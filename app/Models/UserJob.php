<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    use HasFactory;
    protected $table = 'users_jobs';

    public function job(){
        return $this->belongsTo(Job::class,'jobs_id');
    }

    public function school(){
        return $this->belongsTo(School::class,'school_id');
    }
}
