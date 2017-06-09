<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;

class HomeImageController extends Controller
{
    public function index()
    {
    	$images = ImageGallery::get();
    	return view('pages.home', compact('images'));
    }
}
