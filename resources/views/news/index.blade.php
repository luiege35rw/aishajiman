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
                                      <img src="{{ asset('storage/image/' . $headline->image_path) }}">
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
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
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
                            <div class="image col-md-6 text-left mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    {{ $post->profile->name, 1500 }}
                    {{ $post->profile->modelhistory, 1500}}
                    {{ $post->profile->spot, 1500 }}
                    {{ $post->profile->introduction, 1500 }}
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection