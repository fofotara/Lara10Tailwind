<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function index(){
		$jobs = Job::query()->orderByDesc('created_at');

		return view('dashboard.jobs.index', compact('jobs'));


    }
}
