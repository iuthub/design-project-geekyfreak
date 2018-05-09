<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User; 
use App\Favourite;
use App\ComicPost;
use App\MangaPost;
use App\ManhwaPost;

class PagesController extends Controller
{
    public function index()
    { 

        if(!Auth::guest()){
        $user_id=auth()->user()->id;

        $comics = ComicPost::orderBy('updated_at','desc')->get();
        $mangas = MangaPost::orderBy('updated_at','desc')->get();
        $manhwas = ManhwaPost::orderBy('updated_at','desc')->get();
        
    	return view('pages.index')->with(array('user_id'=>$user_id,'comics' => $comics,'mangas' => $mangas ,'manhwas' => $manhwas));
        }
        else
        {
             $comics = ComicPost::orderBy('updated_at','desc')->get();
        $mangas = MangaPost::orderBy('updated_at','desc')->get();
          $manhwas = ManhwaPost::orderBy('updated_at','desc')->get();
        return view('pages.index')->with(array('comics' => $comics,'mangas' => $mangas,'manhwas' => $manhwas ));   
        } 
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
    public function manhwa()
    {
    	return view('pages.manhwa');
    }

    public function news()
    {
    	return view('pages.news');
    }
}
