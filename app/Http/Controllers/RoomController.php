<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\School;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index() {

        $rooms = Room::paginate(10);
        $schools = School::all();
        return view('rooms.index', [
            'rooms' => $rooms,
            'schools' => $schools
        ]);
    }

        public function store(Request $request)
        {
            $attributes = $request->validate([
                'title' => 'required|min:3|max:64|string',
                'school_id' => 'required|integer'
            ]);

            Room::create($attributes);

            /*
            $room = new Room();
            $room->title = $attributes['title'];
            $room->school_id = 101;
            $room->save();
            */

            return back()->with('success', __('Room saved.'));
        }

        public function destroy(Room $room){
            $room->delete();

            return back()->with('success',__('Room removed.'));
        }

        public function edit(Room $room){
            $schools = School::all();

            return view('rooms.edit', [
                'room' => $room,
                'schools' => $schools
            ]);
        }

        public function update(Room $room){
            $attributes = request()->validate([
                'title' => 'required|min:3|max:64|string',
                'school_id' => 'required|integer'
            ]);

            $room->update($attributes);

            return back()->with('success', __('Room saved.'));
        }
}
