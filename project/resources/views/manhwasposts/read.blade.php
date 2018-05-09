@extends('layouts.app')
             @section('content')
             <br>
                  <a href="/ManhwaPost" class="btn btn-primary">Go Back</a> 
                 <br><br>  

                   @for($i=0;$i<=$manhwa->numberofpages;$i++)
                     <div  class="itempage" >
                  @if($i<=9)
                  <img src="{{$manhwa->path}}/0{{$i}}.{{$manhwa->ext}}" />
                  

                  @else
                  <img src="{{$manhwa->path}}/{{$i}}.{{$manhwa->ext}}" />
                  
                   @endif
                 </div>
                  @endfor


                  <br><br>
                  <div class="pagination justify-content-center"></div>


                  <br>
                  <br>
<div>


                  @if(!Auth::guest())
                  {{Form::open(['route'=>['comments.storemanhwa',$manhwa->id], 'method'=>'POST'])}}
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      <div class="form-group">
                      {{Form::label('comment' , "Comment:")}}
                      {{Form::textarea('comment','',['id'=>'article-ckeditor','class'=>'form-control', 'row'=>'5'])}}
                            </div>
                      {{Form::submit('Add comment',['class'=>'btn btn-success btn-block'])}}
                    </div>
                      
            
                  </div>
                  {{Form::close()}}
                  @else
                  <div class="row justify-content-center">
                  <div class="card justify-content-center col-md-8 bg-dark"> 
                                           <div class="card-header btn-success"><a class="nav-link" data-toggle="modal" data-target="#myModal1">Login to leave a comment</a></div>
                                           </div>
                                         </div>
                   @endif

                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      @if(count($manhwa->comments)>0)
                      @foreach($manhwa->comments as $comment)
                          <div class="card"> 
                             <div class="card-header">{{App\User::find($comment->user_id)->name}}</div>
                             <div class="card-body">{{$comment->body}}
                               @if(!Auth::guest())
                                @if (App\Comment::where(array('id'=>$comment->id,'commentable_id'=>$manhwa->id,'user_id'=>$user_id,'commentable_type'=>get_class($manhwa)))->exists()) 
                               <a href="/deletecommentformanhwa/{{$comment->id}}"><i class="float-right">delete</i></a>
                               @endif
                               @endif
                             </div>

                   </div>
                      @endforeach
                      @else
                      <div class="card"> 
                             <div class="card-header">No comments yet</div>
                          </div>
                      @endif
                    </div>

                  </div>
                </div>



             @endsection
