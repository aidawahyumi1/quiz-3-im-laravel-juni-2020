@extends('layouts.master')

@section('content-title')
<br>
DETAIL ARTKEL<br>
<a href="/artikel" class="btn btn-primary btn-sm">KEMBALI KE DAFTAR ARTIKEL</a>
@endsection

@section('content')

<div class="card vw-100">
  <div class="card-body">
    @foreach($articles as $key => $article)
    <h5>Judul:{{ $article-> judul }}</h5>
    <p>Slug :{{ $article-> slug }}</p>
    <p>{{ $article-> isi }}</p>
    <p>Tag:</p>
    	@foreach($newtags as $key => $newtag)
   		<label class="btn btn-success ">{{ $newtags[$key] }}</label>
   		@endforeach
   @endforeach
  </div>
</div>
   

@endsection