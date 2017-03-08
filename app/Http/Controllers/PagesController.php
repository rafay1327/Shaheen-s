<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
    	return view('pages.welcome');
    }

    public function getAbout(){
    	$name ="Shaheen's";
    	$email="shaheens@gmail.com";
    	$number="0342-2489766";

    	return view('pages.about')->withName($name)->withEmail($email);
    }

    public function getContact(){
    	return view('pages.contact');
    }
    public function getGallery(){
    	return view('pages.gallery');
    }
    public function getServices(){
    	return view('pages.services');
    }
    
}
