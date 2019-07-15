@extends('layouts.profile')

@section('title','Laravel')

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-8 mx-auto">
       <h2>"Myプロフィール"</h2>
       <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="body" value="{{ old('body') }}">
                        </div>
                    </div>
                    <h3>性別</h3>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">男</label>
                        <div class="col-md-10">
                            <input class="radio" name="body">{{ old('body') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">女</label>
                        <div class="col-md-10">
                            <input class="radio" name="body">{{ old('body') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label class ="col-md-2" for="title">自己紹介</label>
                        <div class="col-md-2">
                            <textarea type="form-control" name="title" rows="20">{{old('title')}}</textarea>
                        </div>
                    </div>
                    
                    
       </form>
     </div>
   </div>
 </div>
@endsection