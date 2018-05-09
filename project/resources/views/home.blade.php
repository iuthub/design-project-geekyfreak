@extends('layouts.app')

@section('content')

           <div class="card"> 
                <div class="card-header ">Favourites</div>
                   </div>

              
                   <div class="d-flex flex-row flex-wrap">
                  @if(count($comics)>0) 

                    @foreach($comics as $comic)
                          @include('layouts.comicscard')
                    @endforeach
                    @endif
                     @if(count($mangas)>0) 

                    @foreach($mangas as $manga)
                        @include('layouts.mangacard')
                    @endforeach
                    @endif
                     @if(count($manhwas)>0) 
                    @foreach($manhwas as $manhwa)
                       @include('layouts.manhwacard')
                    @endforeach
                    @endif

                    
                    @if(count($comics)==0)
                    @if(count($mangas)==0)
                    @if(count($manhwas)==0)
                    <p>No  items</p>
                     @endif 
                     @endif
                     @endif
                </div>
                     
                    <br><br>
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
