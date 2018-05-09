<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User; 
use App\Favourite;
use App\ComicPost;
use App\MangaPost;
use App\ManhwaPost;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user_id=auth()->user()->id;
        $user= User::find($user_id);  
       

        return view('home')->with(array('user_id'=>$user_id,'comics' => $user->comics,'mangas' => $user->mangas,'manhwas' => $user->manhwas ));
    }


    public function savecomics($id)
    { 
       $user_id=auth()->user()->id;
        $user= User::find($user_id); 

        $comics=ComicPost::find($id);

        if (!Favourite::where(array('favouritable_id'=>$comics->id,'user_id'=>$user_id,'favouritable_type'=>get_class($comics)))->exists()) 
            {
   //user found

        $favourite=new Favourite();
        $favourite->user_id=$user_id;
        $favourite->favouritable_id=$comics->id;
        $favourite->favouritable_type=get_class ($comics);
        $favourite->save();

        Session::flash('success','Comics added to favourites');
         }
        else
        {
             $favourite=Favourite::where('favouritable_id', $comics->id);
         
            $favourite->delete();

        }

     
        return redirect('ComicPost')->with('comics',$user->comics);
    
        
    }

     public function savemangas($id)
    { 
       $user_id=auth()->user()->id;
        $user= User::find($user_id); 

        $mangas=MangaPost::find($id);

        if (!Favourite::where(array('favouritable_id'=>$mangas->id,'user_id'=>$user_id,'favouritable_type'=>get_class($mangas)))->exists()) 
            {
   //user found

        $favourite=new Favourite();
        $favourite->user_id=$user_id;
        $favourite->favouritable_id=$mangas->id;
        $favourite->favouritable_type=get_class ($mangas);
        $favourite->save();
         }
        else
        {
             
             $favourite=Favourite::where('favouritable_id', $mangas->id);
             $favourite->delete();

        }

        return redirect('MangaPost')->with('mangas',$user->mangas);
      
    }

       public function savemanhwas($id)
    { 
       $user_id=auth()->user()->id;
        $user= User::find($user_id); 

        $manhwas=ManhwaPost::find($id);

        if (!Favourite::where(array('favouritable_id'=>$manhwas->id,'user_id'=>$user_id,'favouritable_type'=>get_class($manhwas)))->exists()) 
            {
   //user found

        $favourite=new Favourite();
        $favourite->user_id=$user_id;
        $favourite->favouritable_id=$manhwas->id;
        $favourite->favouritable_type=get_class ($manhwas);
        $favourite->save();
         }
        else
        {
            $favourite=Favourite::where('favouritable_id', $manhwas->id);
            $favourite->delete();

        }

        return redirect('ManhwaPost')->with('manhwas',$user->manhwas);
      
    }


}
