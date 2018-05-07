<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }
    public function comics()
    {
    	return view('pages.comics');
    }
    public function contacts()
    {
    	return view('pages.contacts');
    }
    public function manga()
    {
    	return view('pages.manga');
    }
    public function movies()
    {
    	return view('pages.movies');
    }

    public function news()
    {
    	return view('pages.news');
    }
}
