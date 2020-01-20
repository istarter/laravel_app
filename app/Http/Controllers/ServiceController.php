<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todo;
use App\Service;
class ServiceController extends Controller
{
    public function index() {
        $services = Todo::all();
        return view('service.index')->with('services', $services);
    }

    public function store(Request $request) {
        $data = request()->validate([
            'name' => 'required|min:5'
        ]);
        Todo::create($data);
        return redirect()->back();
    }
}
