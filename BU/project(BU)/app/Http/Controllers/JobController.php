<?php

namespace App\Http\Controllers;

use App\Models\Job_info;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job_info()  
    {  
        $job_info = job_info::all();  
        return view('job_info');
    }

    public function draw()  
    {  
        $job_info = job_info::all(); 
        
        // Basic random selection logic  
        $drawnItem = $job_info->random();  
        
        return response()->json($drawnItem);
    }

    public function insertjob(request $request){
        $addjob = new Job_info;
        $addjob->name = $request->name; // ชื่องาน
        $addjob->information = $request->information; // รายละเอียดงาน
        $addjob->category = $request->category; // ประเภทงาน
        $addjob->member = $request->member; // จำนวนคน
        $addjob->money = $request->money; // ค่าจ้าง
        $addjob->contact = $request->contact; // ช่องทางการติดต่อ
        $addjob->image_url = $request->image_url; // รูปภาพ
        $addjob->risky = $request->risky; //งานที่มีความเสียงสูง
        $addjob->save();
        return redirect('/find_worker');
    }

    public function search(Request $request)
    {
        $query = Job_info::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('information')) {
            $query->where('information', 'like', '%' . $request->information . '%');
        }

        if ($request->filled('risky')) {
            $query->where('risky', $request->risky);
        }

        $jobs = $query->get();

        return view('search_results', compact('jobs'));
    }
}
