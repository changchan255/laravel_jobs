<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Models\Career;

class HomeController extends Controller
{
    public function index() {
        $jobsNew = Job::with('company:id,c_name,c_logo')->orderByDesc('id')
            ->limit(10)
            ->get(['id', 'j_name', 'j_address', 'j_slug','j_hash_slug', 'j_company_id']);

        $careersHot = Career::where('c_hot', Career::HOT)
        ->limit(8)
        ->orderByDesc('id')
        ->get();
    $viewData = [
        'jobsNew' => $jobsNew,
        'careersHot' => $careersHot
    ];
        return view('home.index', $viewData);
    }

}
