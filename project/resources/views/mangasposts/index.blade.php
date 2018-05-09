@extends('layouts.app')
             @section('content')
                   @foreach($mangaposts as $manga)

                   		<!-- <div class="well">
                   			<a href="/ComicPost/{{$manga->id}}">
                   			

                   		</div>
                              <div class="card">
                                <img src="{{$manga->path}}/00.{{$manga->ext}}" alt="Avatar" style="width:30%">
                                <div class="container">
                                  <h4><b>{{$manga->title}}</b></h4> 
                                  <p>Marvel</p> 
                                </div>

                                </a>
                              </div> -->

                              <div class="card float-left" style="width:200px">
                                      <img class="card-img-top" src="{{$manga->path}}/00.{{$manga->ext}}" alt="Card image" style="height: 150px">
                                      <div class="card-body">
                                        <h4 class="card-title">{{$manga->title}}</h4>
                                        <a href="/ComicPost/{{$manga->id}}" class="btn btn-primary">Read</a>
                                      </div>
                              </div>

                   @endforeach
                   {{$mangaposts->links()}}   
             @endsection
