<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
     public function index()
    {
        $classes = Classes::latest()->paginate(5);
        return view('classes.index', compact('classes'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

public function create()
    {
    	return view('classes.create');
    }
    public function store(Request $request)
    {
    	$data = $request->all();
    	$title = $request->title;
    	$title = $data['title'];
    	$status = $data['status'];

    	$classes = new Classes;
    	$classes->title = $title;
    	$classes->status = $status;
    	$classes->save();
    	return redirect('/classes');


    }
}
