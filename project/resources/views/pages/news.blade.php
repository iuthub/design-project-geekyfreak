@extends('layouts.app')
             @section('content')
             @if(count($newsposts)>0) 
<br><br>
                    @foreach($newsposts as $news)

             	
                   <div class="jumbotron p-3">{{$news->news_body}}<span class="float-right">{{$news->created_at}}</span></div>
                        <br>
                        @endforeach 


                        <div class="row justify-content-center">{{$newsposts->links()}}</div>
                        @endif    


             @endsection

