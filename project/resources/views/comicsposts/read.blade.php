@extends('layouts.app')
             @section('content')
                  <a href="/ComicPost" class="btn btn-default"><</a> 
                   

                  <h1>{{$comics->title}}</h1>
             

    <!--     <ul class="pagination pagination-lg">   
        	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
     -->
                   @for($i=0;$i<=$comics->numberofpages;$i++)
                  @if($i<=9)
                  <img src="{{$comics->path}}/0{{$i}}.{{$comics->ext}}" />
                  

    
<!--     <li class="page-item"><a class="page-link" href="/ComicPost/{{$comics->id}}/{{$i}}">{{$i+1}}</a></li>
 -->    
  
  
                  @else
                  <img src="{{$comics->path}}/{{$i}}.{{$comics->ext}}" />
                  
                   @endif
                  @endfor
            <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul> -->
             @endsection
