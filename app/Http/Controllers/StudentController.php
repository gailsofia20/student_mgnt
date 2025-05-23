<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    
        public function index()
        {   
            $students = students::get();
    
            return view ('students.index', compact('students'));
        }
    
        public function create()
        {
            return view ('students.create');
        }
    
    
        public function store(Request $request)
        {
        $request->validate([
            'fname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer',
            
        ]);
    
        employee::create($request->all());
        return view ('students.create');
        }
    }


