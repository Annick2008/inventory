<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        // $schools = School::all();

        $schools = School::paginate(10);
        return view('schools.index', [
            'schools' => $schools
        ]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'name' => 'required|min:3|max:64|string',
            'school_number' => 'required|min:6|max:6|string',
            'address' => 'required|min:8|max:64|string'
        ]);

        $school = new School();
        $school->name=$attributes['name'];
        $school->school_number=$attributes['school_number'];
        $school->address=$attributes['address'];
        $school->save();

        return back()->with('success', __('School saved.'));

    }
}
