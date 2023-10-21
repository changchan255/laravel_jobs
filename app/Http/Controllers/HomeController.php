<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Models\Career;

class HomeController extends Controller
{
    public function index() {
//        $hashids = new Hashids(config('app._token_id'));
//        $id = $hashids->encode(1,10,112,1212,12,2,1,2,12);
//        dump($id);
//        $numbers = $hashids->decode($id);
//        dump($numbers);

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
