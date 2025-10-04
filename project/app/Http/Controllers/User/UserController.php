<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ReportMail;
use App\Models\Job_info;
use App\Models\User;
use app\Models\EmailVerification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index()
{
    $currentUserId = auth::id();

    // ดึงเฉพาะ user ที่มีข้อความกับผู้ใช้ปัจจุบัน
    $users = User::where('id', '!=', $currentUserId)
        ->where(function($q) use ($currentUserId) {
            $q->whereHas('sentMessages', function($query) use ($currentUserId) {
                $query->where('receiver_id', $currentUserId);
            })
            ->orWhereHas('receivedMessages', function($query) use ($currentUserId) {
                $query->where('sender_id', $currentUserId);
            });
        })
        ->get();

    return view('dashboard', compact('users'));
}

    public function userChat(int $userId): View {
        return view('user-chat', compact('userId'));
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
    
    public function loadDashboard()
    {
        $user = User::whereNotIn('id', [Auth::user()->id])->get();
        return view('dashboard', compact('user'));
    }

    public function report_mail_send(Request $request)
    {
        Mail::to('r2ce@gmail.com')->send(new ReportMail($request));
        return redirect('faq');
    }
    
}
