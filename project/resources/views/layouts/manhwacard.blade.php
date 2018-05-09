 <div class="carditem card  flex-fill" style="width:200px" >
                                      <img class="card-img-top" src="{{$manhwa->path}}/00.{{$manhwa->ext}}" alt="Card image" style="height: 150px">
                                      <div class="card-body">
                                        <h4 class="card-title">{{$manhwa->title}}</h4>
                                        <a href="/ManhwaPost/{{$manhwa->id}}" class="btn btn-primary">Read</a>
                                        <!-- Use an element to toggle between a like/dislike icon -->
                                          @if(!Auth::guest())
                                          @if (!App\Favourite::where(array('favouritable_id'=>$manhwa->id,'user_id'=>$user_id,'favouritable_type'=>get_class($manhwa)))->exists())
                                            <a href="/addfavouritemanhwas/{{$manhwa->id}}"><i onclick="myFunction(this)" class="fa fa-thumbs-up"></i></a>
                                            @else
                                            <a href="/addfavouritemanhwas/{{$manhwa->id}}"><i onclick="myFunction(this)" class="fa fa-thumbs-down"></i></a>
                                            @endif
                                            @endif
                                      </div>
                        </div>