<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function seite(){
        return view('about');
    }

    public function imp(){
        return view('impressum');
    }

    public function me(){
        return view('me');
    }

    public function about(){
        return "<html><title>About</title><body><h1>About me</h1></body></html>";
    }

    public function index(){
        return "Hallo, Welt!";
    }

    public function impressum($info){
        $vorname = 'Max';
        $nachname = 'Muster';
        $alter = 17;

        // In der View (imp.blade.php) sind die Variablen vorname, nachname und
        // age verfügbar. Es beliebige Varibalen weritergereicht werden.
        return view('imp', [
            'vorname' => $vorname,
            'nachname' => $nachname,
            'age' => $alter,
            'info' => "<script>window.top.location = 'https://www.google.at';</script>"
        ]);
    }


}
