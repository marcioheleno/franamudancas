<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex() {
        return view('pages.home');
    }

    public function getAbout() {
        $first = 'Márcio';
        $lastName = 'Heleno';

        $full = $first . " " . $lastName;

        return view('pages.about')->withFull($full);
    }

    public function getContact() {
        return view('pages.contact');
    }

}
