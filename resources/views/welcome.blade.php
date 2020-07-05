@extends('layouts.master')

@section('content-title')
DIAGRAM ERD 
<br>
<a href="/artikel" class="btn btn-primary btn-sm">LIHAT ARTIKEL</a>
@endsection

@section('content')
<img class="mx-auto" src="{{asset('images/erd.png')}}">
@endsection