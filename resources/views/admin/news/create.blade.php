

@extends('layouts.admin')

@section('title','ニュースの新規作成')

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-8 mx-auto">
       <h2>ニュースの新規作成</h2>
       <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">
     </div>
   </div>
 </div>
@endsection