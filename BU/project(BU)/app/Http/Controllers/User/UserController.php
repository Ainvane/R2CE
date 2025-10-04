<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Job_info;
use App\Models\User;
use app\Models\EmailVerification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Arrayable;

class UserController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function faq(){
        return view('faq');
    }

    public function find_job(){
        return view('find_job');
    }

    public function job_info(){  
        return view('job_info');
    }

    public function draw()  
    {  
        $job = Job_info::all();  
        
        // Basic random selection logic  
        $drawnItem = $job->random();
        
        return response()->json($drawnItem);  
    }

}
