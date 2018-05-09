@extends('layouts.app')
             @section('content')
                  <a href="/ManhwaPost" class="btn btn-default"><</a> 
                   

                  <h1>{{$manhwa->title}}</h1>
             

    <!--     <ul class="pagination pagination-lg">   
        	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
     -->
                   @for($i=0;$i<=$manhwa->numberofpages;$i++)
                  @if($i<=9)
                  <img src="{{$manhwa->path}}/0{{$i}}.{{$manhwa->ext}}" />
                  

    
<!--     <li class="page-item"><a class="page-link" href="/manhwaPost/{{$manhwa->id}}/{{$i}}">{{$i+1}}</a></li>
 -->    
  
  
                  @else
                  <img src="{{$manhwa->path}}/{{$i}}.{{$manhwa->ext}}" />
                  
                   @endif
                  @endfor
            <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul> -->
             @endsection
