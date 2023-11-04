<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminAttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::all();
        $viewData = [
            'attributes' => $attributes
        ];
        return view('admin::attribute.index', $viewData);
    }
}
