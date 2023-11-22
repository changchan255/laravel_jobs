<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Attribute;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

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

    public function create()
    {
        return view('admin::attribute.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['a_slug'] = Str::slug($request->a_slug);
        $data['created_at'] = Carbon::now();

        Attribute::create($data);
        return redirect()->back();
    }
    public function delete($id)
    {
        Attribute::find($id)->delete();
        return redirect()->back();
    }
}
