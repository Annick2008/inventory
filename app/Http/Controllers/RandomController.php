<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Random;

class RandomController extends Controller
{
    public function select(){

            // return random_int(1,9);

            $stud = random_int(1,9);
            return view('students.random', [
            'stud' => $stud
        ]);

    }
}
