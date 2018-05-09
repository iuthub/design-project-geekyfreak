<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User; 
use App\Favourite;
use App\ComicPost;
use App\MangaPost;
use App\ManhwaPost;use Session;
class CommentsController extends Controller
{
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecomics(Request $request,$id)
    {
        
       $user_id=auth()->user()->id;
        $user= User::find($user_id); 

        $comics=ComicPost::find($id);
        $comment=new Comment();
        $comment->user_id=$user_id;
        $comment->commentable_id=$id;
        $comment->commentable_type=get_class ($comics);
        $comment->body=$request->comment;

        $comment->save();

        Session::flash('success','comment has been added ');

        return redirect()->route('ComicPost.show', [$id]);

    }

    public function deletecomics($comment_id)
    {
        $comment=Comment::find($comment_id);
        $comment->delete();
        Session::flash('success','comment has been deleted ');
        return redirect()->back();

    }
    public function deletemanhwa($comment_id)
    {
        $comment=Comment::find($comment_id);
        $comment->delete();
        Session::flash('success','comment has been deleted ');
        return redirect()->back();

    }
    public function storemanga(Request $request,$id)
    {
        
       $user_id=auth()->user()->id;
        $user= User::find($user_id); 

        $manga=MangaPost::find($id);
        $comment=new Comment();
        $comment->user_id=$user_id;
        $comment->commentable_id=$id;
        $comment->commentable_type=get_class ($manga);
        $comment->body=$request->comment;

        $comment->save();

        Session::flash('success','comment has been added ');

        return redirect()->route('MangaPost.show', [$id]);

    }
    public function storemanhwa(Request $request,$id)
    {
        
       $user_id=auth()->user()->id;
        $user= User::find($user_id); 

        $manhwa=ManhwaPost::find($id);
        $comment=new Comment();
        $comment->user_id=$user_id;
        $comment->commentable_id=$id;
        $comment->commentable_type=get_class ($manhwa);
        $comment->body=$request->comment;

        $comment->save();

        Session::flash('success','comment has been added ');

        return redirect()->route('ManhwaPost.show', [$id]);

    }
}
