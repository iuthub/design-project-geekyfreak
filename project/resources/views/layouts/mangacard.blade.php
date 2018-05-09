 <div class="carditem card flex-fill" style="width:200px" >
                                      <img class="card-img-top" src="{{$manga->path}}/00.{{$manga->ext}}" alt="Card image" style="height: 150px">
                                      <div class="card-body">
                                        <h4 class="card-title">{{$manga->title}}</h4>
                                        <a href="/MangaPost/{{$manga->id}}" class="btn btn-primary">Read</a>
                                        <!-- Use an element to toggle between a like/dislike icon -->
                                           	@if(!Auth::guest())
                                            @if (!App\Favourite::where(array('favouritable_id'=>$manga->id,'user_id'=>$user_id,'favouritable_type'=>get_class($manga)))->exists()) 
                                            <a href="/addfavouritemangas/{{$manga->id}}"><i onclick="Like(this)" class="fa fa-thumbs-up"></i></a>
                                            @else
                                            <a href="/addfavouritemangas/{{$manga->id}}"><i onclick="DisLike(this)" class="fa fa-thumbs-down"></i></a>
                                            @endif
                                            @endif
                                      </div>
                        </div>