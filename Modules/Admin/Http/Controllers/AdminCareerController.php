<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Career;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminCareerController extends Controller
{
   public function index()
   {
       $careers = Career::all();
       $viewData = [
           'careers' => $careers
       ];
       return view('admin::career.index', $viewData);
   }
}
