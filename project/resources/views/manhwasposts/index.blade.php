@extends('layouts.app')
             @section('content')
                   @foreach($manhwaposts as $manhwa)

                   		<!-- <div class="well">
                   			<a href="/ComicPost/{{$manhwa->id}}">
                   			

                   		</div>
                              <div class="card">
                                <img src="{{$manhwa->path}}/00.{{$manhwa->ext}}" alt="Avatar" style="width:30%">
                                <div class="container">
                                  <h4><b>{{$manhwa->title}}</b></h4> 
                                  <p>Marvel</p> 
                                </div>

                                </a>
                              </div> -->

                              <div class="card float-left" style="width:200px">
                                      <img class="card-img-top" src="{{$manhwa->path}}/00.{{$manhwa->ext}}" alt="Card image" style="height: 150px">
                                      <div class="card-body">
                                        <h4 class="card-title">{{$manhwa->title}}</h4>
                                        <a href="/ComicPost/{{$manhwa->id}}" class="btn btn-primary">Read</a>
                                      </div>
                              </div>

                   @endforeach
                   {{$manhwaposts->links()}}   
             @endsection
