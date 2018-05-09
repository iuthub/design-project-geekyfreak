<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\MangaPost;
class MangasPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(!Auth::guest())
            {
        $user_id=auth()->user()->id;

        $mangasposts = MangaPost::all();        
        return view('mangasposts.index')->with(array('user_id'=>$user_id,'mangaposts'=>$mangasposts));
        }
        else
        {
            $mangasposts = MangaPost::all();        
        return view('mangasposts.index')->with('mangaposts', $mangasposts);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $manga= MangaPost::find($id);
        if(!Auth::guest())
            {
        $user_id=auth()->user()->id;
       

        return view('mangasposts.read')->with(array('user_id'=>$user_id,'manga'=>$manga));
            }
            else
                return view('mangasposts.read')->with('manga',$manga); 
    }

    public function page($id)
    {
        $manga= MangaPost::find($id);

        return view('mangasposts.read')->with('manga',$manga); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
