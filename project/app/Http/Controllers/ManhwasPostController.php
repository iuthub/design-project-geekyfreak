<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ManhwaPost;
class ManhwasPostController extends Controller
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

        $manhwaspost = ManhwaPost::all();        
        return view('manhwasposts.index')->with(array('user_id'=>$user_id,'manhwaposts'=>$manhwaspost));
        }
        else
        {
            $manhwaspost = ManhwaPost::all();        
        return view('manhwasposts.index')->with('manhwaposts', $manhwaspost);
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
       
        $manhwa= ManhwaPost::find($id);
        if(!Auth::guest())
            {
        $user_id=auth()->user()->id;
       

        return view('manhwasposts.read')->with(array('user_id'=>$user_id,'manhwa'=>$manhwa));
            }
            else
        return view('manhwasposts.read')->with('manhwa',$manhwa);
    }

    public function page($id)
    {
       
        $manhwa= ManhwaPost::find($id);

        return view('manhwasposts.read')->with('manhwa',$manhwa);
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
