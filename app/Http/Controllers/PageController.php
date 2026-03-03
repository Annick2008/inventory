<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
            // In der View (img.blade.php) sind die Variablen vorname, nachname und age verfügbar.
            // Es können beliebige Variablen weitergereicht werden.
        public function impressum($vorname, $nachname){
            return view('impressum', [
                'vorname' => $vorname,
                'nachname' => $nachname,
                'info' => "Der PC funktioniert perfekt"
            ]);
        }
}
