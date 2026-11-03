<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        // $schools = School::all();

        $users = User::with('schools')->get();

        $user = auth()->user();
        // dd($user);


        $schools = $user->schools;

        $schul_id = 101;

        // closure
        $hak = $user->schools->filter(function($school)use ($schul_id){
            return $school->id == $schul_id;
        })->first();

        dd($hak);


        // $schools = $user->schools()::paginate(10);
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

    public function destroy(School $school){
        $school->delete();

        return back()->with('success',__('School removed.'));
    }

    public function edit(School $school){
        $schools = School::all();

        return view('schools.edit', [
            'school' => $school
        ]);
    }

    public function update(School $school){
        $attributes = request()->validate([
            'name' => 'required|min:3|max:64|string',
            'school_number' => 'required|min:6|max:6|string',
            'address' => 'required|min:8|max:64|string'
        ]);

        $school->update($attributes);

        return back()->with('success', __('School saved.'));
    }
}
