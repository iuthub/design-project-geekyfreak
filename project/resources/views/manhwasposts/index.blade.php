@extends('layouts.app')
             @section('content')

             <div class="flex-row">
             <div class="card"> 
                <div class="card-header "></div>
                   </div>
              </div>
                   
             <div class="d-flex flex-row flex-wrap">
                   @foreach($manhwaposts as $manhwa)

                      @include('layouts.manhwacard')

                   @endforeach
                  </div>   <br><br>
                    <div class="row justify-content-center">
                    
                  <div class="itempagination"></div>

                  </div>


                  <br>
                  <br>
                   <div class="flex-row">
                     <div class="card"> 
                        <div class="card-header "></div>
                           </div>
                      </div>
                     
             @endsection
