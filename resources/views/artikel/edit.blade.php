@extends('layouts.master')

@section('content-title')
<br>
BUAT ARTIKEL<br>
<a href="/artikel" class="btn btn-primary btn-sm">KEMBALI KE DAFTAR ARTIKEL</a>
@endsection

@section('content')
<div class="card vw-100">
  <div class="card-body">
	    <form action="/artikel/{{$articles[0]->id}}" method="POST">
		@csrf
		@method('PUT')
		  <div class="form-group">
		    <label for="judul">Judul</label>
		    <input type="text" class="form-control" value="{{$articles[0]->judul}}" id="judul" aria-describedby="emailHelp" name="judul">
		  </div>
		  <div class="form-group">
		    <label for="isi">Isi Artikel</label>
		    <textarea class="form-control" id="isi" name="isi">{{$articles[0]->isi}}</textarea> 
		  </div>
		  <div class="form-group">
		    <label for="isi">Tag</label>
		    <input type="text" value="{{$articles[0]->tag}}" class="form-control" id="tag" name="tag">
		    <small class="form-text text-muted">Pisahkan tag dengan spasi</small>
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>

@endsection