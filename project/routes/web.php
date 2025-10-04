<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Middleware\TwoFactor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupChatController;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReportMail;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/faq', [UserController::class,'faq'])->name('faq');

Route::get('/testroute', function() {
    $name ='Namkang';
    Mail::to('r2ce@gmail.com')->send(new ReportMail($name));
});
Route::post('report_mail', [UserController::class, 'report_mail_send']);

//Route::get('/find_job', [UserController::class,'find_job'])->name('find_job');
Route::get('/job_info', [UserController::class, 'job_info'])->name('job_info');
Route::post('/job_info/draw', [UserController::class, 'draw'])->name('job_info.draw');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/find_job', [ProfileController::class, 'find_job'])->name('find_job');
    Route::get('/find_worker', [ProfileController::class, 'find_worker'])->name('find_worker');
    Route::post('insertjob', 'App\Http\Controllers\JobController@insertjob')->name('insertjob');
    Route::post('search', 'App\Http\Controllers\JobController@search')->name('search');
    Route::post('/group-chat/add-member', [GroupChatController::class, 'addMember'])->name('group-chat.add-member');
    Route::post('/group-chat/send-message', [GroupChatController::class, 'sendMessage'])->name('group-chat.send-message');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//chat Route
Route::controller(UserController::class)->group(function() {
    Route::get('dashboard', 'index')->name('dashboard')->middleware('auth', 'verified');
    Route::get('/chat/{id}', 'userChat')->name('chat');
});

//Route::get('/dashboard', [UserController::class, 'loadDashboard'])->middleware('auth')->name('dashboard');
//Route::post('/chat/room', [GroupChatController::class,'fireMessage'])->middleware('auth')->name('chatroom');

//User Route
Route::middleware(['auth','userMiddleware', 'verified'])->group(function(){
    Route::get('dashboard',[UserController::class,'index'])->name('dashboard');
});

//Admin Route
Route::middleware(['auth','adminMiddleware'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
});

