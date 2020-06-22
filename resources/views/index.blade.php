@extends('layout')

@section('content')
    <section class="latest section">
            <div class="section-inner">
                <h2 class="heading">Статьи</h2>
                <div class="content">    
                     
                @foreach ($posts as $post)

                    <hr class="divider" />
                    <div class="item row">
                        <a class="col-md-4 col-sm-4 col-xs-12" href="#" target="_blank">
                        <img class="img-responsive project-image" src="/storage/posts/{{ $post->image }}" alt="project name" />
                        </a>
                        <div class="desc col-md-8 col-sm-8 col-xs-12">
                            <h3 class="title">
                                <a href="#" target="_blank">
                                {{ $post->title }}
                                </a></h3>
                            <p>{{ $post->content }}</p>
                            
                        </div><!--//desc-->                          
                    </div><!--//item-->
                    
                @endforeach                            
                    
                    
                </div><!--//content-->  
            </div><!--//section-inner-->                 
        </section><!--//section-->

@endsection

