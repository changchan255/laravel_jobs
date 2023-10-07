<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class HomeController extends Controller
{
    public function index() {
        $careersHot = Career::where('c_hot', Career::HOT)
        ->limit(8)
        ->orderByDesc('id')
        ->get();
    $viewData = [
        'careersHot' => $careersHot
    ];
        return view('home.index', $viewData);
    }

}
