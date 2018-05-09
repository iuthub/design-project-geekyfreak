<div class="carditem card flex-fill" style="width:200px" >
                                      <img class="card-img-top " src="{{$comic->path}}/00.{{$comic->ext}}" alt="Card image" style="height: 150px">
                                      <div class="card-body">
                                        <h4 class="card-title">{{$comic->title}}</h4>
                                        <a href="/ComicPost/{{$comic->id}}" class="btn btn-primary">Read</a>
                                        <!-- Use an element to toggle between a like/dislike icon -->
                                        	@if(!Auth::guest())
                                            @if (!App\Favourite::where(array('favouritable_id'=>$comic->id,'user_id'=>$user_id,'favouritable_type'=>get_class($comic)))->exists()) 
                                            <a href="/addfavouritecomics/{{$comic->id}}"><i onclick="Like(this)" class="fa fa-thumbs-up"></i></a>
                                            @else
                                            <a href="/addfavouritecomics/{{$comic->id}}"><i onclick="DisLike(this)" class="fa fa-thumbs-down"></i></a>
                                            @endif
                                            @endif
                                      </div>
</div>