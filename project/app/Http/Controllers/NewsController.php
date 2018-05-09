<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
         
            $newsposts = News::orderBy('created_at', 'desc')->paginate(25);        
        return view('pages.news')->with('newsposts', $newsposts);
        
        
    }
}
