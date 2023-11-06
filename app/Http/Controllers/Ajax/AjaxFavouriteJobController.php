<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Hashids\Hashids;
use Illuminate\Http\Request;

class AjaxFavouriteJobController extends Controller
{
    public function addFavourite(Request $request, $hashSlug)
    {
        if ($request->ajax())
        {
            $hashids = new Hashids(config('app._token_id'));
            $hashID = $hashids->decode($hashSlug) ?? [];
            $idJob = array_pop($hashID);
            if(!$idJob) return respond([
                'status' => 404
            ]);
        }
    }
}
