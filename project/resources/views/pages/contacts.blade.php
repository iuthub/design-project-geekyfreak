@extends('layouts.app')
             @section('content')
             <br>
            
            <div class="card bg-secondary m-auto">
                    <h1 class="m-auto">You are waiting for your Feedback</h1>
                   {{Form::open(['route'=>['feedback.store'], 'method'=>'POST'])}}
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      {{Form::label('name' , "Name:")}}
                      {{Form::text('name','',['class'=>'form-control', 'row'=>'1'])}}
                    </div>
                    <div class="col-md-4">
                      {{Form::label('email' , "Email:")}}
                      {{Form::text('email','',['class'=>'form-control', 'row'=>'1'])}}
                    </div>
                  </div>
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                      {{Form::label('feedback' , "Feedback:")}}
                      {{Form::textarea('feedback','',['id'=>'article-ckeditor','class'=>'form-control', 'row'=>'5'])}}
                      {{Form::submit('Add Feedback',['class'=>'btn btn-success btn-block'])}}
                    </div>
                      
            
                  </div>
                  {{Form::close()}}
            </div>
             @endsection

