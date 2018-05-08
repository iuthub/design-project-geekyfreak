@extends('layouts.app')
             @section('content')
                   @foreach($comicposts as $comics)

                   		<!-- <div class="well">
                   			<a href="/ComicPost/{{$comics->id}}">
                   			

                   		</div>
                              <div class="card">
                                <img src="{{$comics->path}}/00.{{$comics->ext}}" alt="Avatar" style="width:30%">
                                <div class="container">
                                  <h4><b>{{$comics->title}}</b></h4> 
                                  <p>Marvel</p> 
                                </div>

                                </a>
                              </div> -->

                              <div class="card float-left" style="width:200px">
                                      <img class="card-img-top" src="{{$comics->path}}/00.{{$comics->ext}}" alt="Card image" style="height: 150px">
                                      <div class="card-body">
                                        <h4 class="card-title">{{$comics->title}}</h4>
                                        <a href="/ComicPost/{{$comics->id}}" class="btn btn-primary">Read</a>
                                      </div>
                              </div>

                   @endforeach
                   {{$comicposts->links()}}   
             @endsection
