<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHome(){ return view('home'); }

    public function getAboutMe(){ return view('about-me'); }
    public function getPortfolio(){return view('portfolio'); }
    public function getHireMe(){return view('hire-me'); }
    public function getReadingList(){return view('reading-list'); }
    public function getMyMind(){return view('my-mind'); }
}
