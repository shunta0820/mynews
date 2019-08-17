@extends('layouts.admin')
@section('title', 'My profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

 <div class="form-group row">
                        <label class="col-md-2" for="body">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">男</label>
                        <div class="col-md-10">
                            @if($profile_form->gender == '男')
                            <input type="radio" name="gender" value="男" checked>
                            @else
                            <input type="radio" name="gender" value="男">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">女</label>
                        <div class="col-md-10">
                            @if($profile_form->gender == '女')
                            <input type="radio" name="gender" value="女" checked>
                            @else
                            <input type="radio" name="gender" value="女">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label class ="col-md-2" for="title">自己紹介</label>
                        <div class="col-md-2">
                            <textarea type="form-control" name="introduction" rows="10">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    
                    
@endsection