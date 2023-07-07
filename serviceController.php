<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Services;

class serviceController extends Controller
{
    
    public function index()
    {
        $services = Services::all();
        return view('service.index', ['serviceX' => $services]);
    }
    
    public function add()
    {
        return view('service.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $newService = Services::create($data);
        return redirect(route('service.index'));
    }
    
}
