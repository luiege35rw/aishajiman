@extends('layouts.admin')
@section('title', '愛社自慢プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
          <div class="form-group">
            
   <p>アバター画像変更</p>
        <input type="file" name="image" id="user_avatar">
      </div>
            <div class="col-md-8 mx-auto">
                <h2>愛車自慢プロフィール編集</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2">愛車遍歴</label>
                    <div class="col-md-10">
                            <input type="text" class="form-control" name="modelhistory" value="{{ $profile_form->modelhistory }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">好きなドライブスポット</label>
                    <div class="col-md-10">
                            <input type="text" class="form-control" name="spot" value="{{ $profile_form->spot }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                       <label class="col-md-2">自己紹介</label>
                    <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ $profile_form->introduction }}</textarea>
                    </div>
                    <div class="form-group row">
                　      <label class="col-md-2">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                            @if ($profile_form->image_path1)
                                        <img src="{{ asset('storage/image/' . $profile_form->image_path1) }}">
                         @endif
                        </div>
                        
                        
                    </div>
                    <div class="form-group row">      
                     <label class="col-md-2">画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2">
                        </div>
                    </div>
                    <div class="form-group row">
                     <label class="col-md-2">画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3">
                        </div>
                    </div>
                   <div class="form-group row">
                     <label class="col-md-2">画像4</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image4">
                        </div>
                    </div>
                    <div class="form-group row">
                     <label class="col-md-2">画像5</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image5">
                        </div>
                    </div>
                    
        {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection