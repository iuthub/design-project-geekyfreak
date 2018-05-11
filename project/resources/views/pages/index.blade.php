@extends('layouts.app')
             @section('content')
             <div class="flex-row">
             <div class="card"> 
                <div class="card-header ">WELCOME to GEEKYFREAK</div>
                   </div>
              </div>
              <div class="d-flex flex-row flex-wrap ">

                <iframe class="apivideo" src="//www.youtube.com/embed/?listType=user_uploads&list=ComicBookCom" width="660px" height="400px" frameborder="0"></iframe>
                <div class="card flex-fill info" style="width:400px" >
                                      <div class="card-body">
                  Simple, convenient, innovative, creative… These are the main basics on which our site was created.
Lots of people, especially young readers who are struggling to improve their reading skills, can benefit from the visual format of comic books and graphic novels. Several studies have indicated that comic books often appeal to readers who find other material too challenging or uninteresting. With their intense visuals and focus on plot and characters, comic books can be much more engaging than other literary media, such as novels or short stories.</div>
</div>
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
                    </div>

                    @if(count($comics)==0)
                    @if(count($mangas)==0)
                    @if(count($manhwas)==0)
                    <p>No items</p>
                     @endif 
                     @endif
                     @endif
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
