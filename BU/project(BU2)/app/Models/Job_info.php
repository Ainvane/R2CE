<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_info extends Model
{
    use HasFactory;

    protected $table = 'job_info';
    protected $fillable = ['name', 'information', 'category', 'member', 'money', 'contact', 'image_url', 'risky']; 

}
