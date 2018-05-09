<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Feedback;

class FeedbacksController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::guest())
            {
        $user_id=auth()->user()->id;
            }
        else
            $user_id=0;
        $feedback=new Feedback();
        $feedback->user_id=$user_id;
        $feedback->name=$request->name;
        $feedback->email=$request->email;
        $feedback->body=$request->feedback;

        $feedback->save();
   
        return redirect()->back();
    }
}
