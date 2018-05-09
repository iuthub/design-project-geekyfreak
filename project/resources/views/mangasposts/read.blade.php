@extends('layouts.app')
             @section('content')
                  <a href="/MangaPost" class="btn btn-default"><</a> 
                   

                  <h1>{{$manga->title}}</h1>
             

    <!--     <ul class="pagination pagination-lg">   
        	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
     -->
                   @for($i=0;$i<=$manga->numberofpages;$i++)
                  @if($i<=9)
                  <img src="{{$manga->path}}/0{{$i}}.{{$manga->ext}}" />
                  

    
<!--     <li class="page-item"><a class="page-link" href="/MangaPost/{{$manga->id}}/{{$i}}">{{$i+1}}</a></li>
 -->    
  
  
                  @else
                  <img src="{{$manga->path}}/{{$i}}.{{$manga->ext}}" />
                  
                   @endif
                  @endfor
            <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul> -->
             @endsection
