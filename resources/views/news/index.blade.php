@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                   @if ($headline->image_path)
                                   <a href="{{ asset('storage/image/' . $headline->image_path) }}" data-lightbox="car">
                                     <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                     </a>
                                 @endif
                                </div>
                                 <div class="model p-2">
                                     <h1>{{ str_limit($headline->model, 70) }}</h1>
                                </div>
                                <div class="text-right mt-3">
                                    <p3>{{ str_limit($headline->title, 70) }}</p3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
          
            <!--プロフィール情報を表示する-->
            <div class="name mt-3">
                    {{ str_limit($headline->profile->name, 150) }}
             </div>
              <div class="name mt-3">
                    {{ str_limit($headline->profile->model, 150) }}
             </div>
              <div class="name mt-3">
                    {{ str_limit($headline->profile->spot, 150) }}
             </div>
              <div class="name mt-3">
                    {{ str_limit($headline->profile->introduction, 1500) }}
             </div>
             
                                  
                 @if ($headline->image_path)
                 <a href="{{ asset('storage/image/' . $headline->profile->image_path) }}" data-lightbox="car">
                     <img src="{{ asset('storage/image/' . $headline->profile->image_path) }}" style="max-width:300px;max-hight:200px">
                 </a>
                 @endif
             </div>
            </div>
            <div>
                 
                <!--写真投稿ループヘッドライン-->
            @for ($i =1; $i <= 6; $i++)
                @if ($headline->profile->{'image_path' . $i})
                <a href="{{ asset('storage/image/' . $headline->profile->{'image_path' . $i}) }}" data-lightbox="car">
                    <img src="{{ asset('storage/image/' . $headline->profile->{'image_path' . $i}) }}" style="max-width:300px;max-hight:200px">
                </a>
                @endif
                @endfor
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row2">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <!--<div class="post" style="border:1px solid #000;">-->
                        <div class="row2">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="model mt-3">
                                    {{ str_limit($post->model, 150) }}
                                </div>
                                <div class="title mt-3">
                                    {{ str_limit($post->title, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->body, 1500) }}
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                            <div class="image col-md-6 text-left mt-4">
                                @if ($post->image_path)
                                    <a href="{{ asset('storage/image/' . $post->image_path) }}" data-lightbox="car">
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}"style="max-width:300px;max-hight:200px">
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
    
                    <!--プロフィール情報を表示する-->
             <div class="name mt-3">
                    {{ str_limit($post->profile->name, 150) }}
             </div>
             <div class="name mt-3">
                    {{ str_limit($post->profile->modelhistory, 150) }}
             </div>
             <div class="name mt-3">
                    {{ str_limit($post->profile->spot, 150) }}
             </div>
             <div class="name mt-3">
                    {{ str_limit($post->profile->introduction, 1500) }}
             </div>
             <div class="image col-md-6 text-right md-4">
                 
                                        
                 @if ($post->image_path)
                 　　<a href="{{ asset('storage/image/' . $post->profile->image_path) }}" data-lightbox="car">
                     <img src="{{ asset('storage/image/' . $post->profile->image_path) }}" style="max-width:300px;max-hight:200px">
                     </a>
                 @endif
             </div>
            </div>
            <div>
                <!--写真投稿ループ本文-->
                @for ($i =1; $i <= 6; $i++)
                @if ($post->profile->{'image_path' . $i})
                <a href="{{ asset('storage/image/' . $post->profile->{'image_path' . $i}) }}" data-lightbox="car">
                    <img src="{{ asset('storage/image/' . $post->profile->{'image_path' . $i}) }}" style="max-width:300px;max-hight:200px">
                </a>
                @endif
                @endfor
            </div>
                
                <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
    
@endsection