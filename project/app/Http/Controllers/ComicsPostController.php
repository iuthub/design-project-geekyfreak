<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ComicPost;

class ComicsPostController extends Controller
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

        $comicsposts = ComicPost::all();        
        return view('comicsposts.index')->with(array('user_id'=>$user_id,'comicposts'=>$comicsposts));
        }
        else
        {
            $comicsposts = ComicPost::all();
        return view('comicsposts.index')->with(array('comicposts'=>$comicsposts));
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
        $comics= ComicPost::find($id);

          if(!Auth::guest())
            {
        $user_id=auth()->user()->id;
      return view('comicsposts.read')->with(array('user_id'=>$user_id,'comics'=>$comics)); 
            }
      else 
        return view('comicsposts.read')->with('comics',$comics); 
    }

    public function page($id)
    {
        $comics= ComicPost::find($id);

        return view('comicsposts.read')->with('comics',$comics); 
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
