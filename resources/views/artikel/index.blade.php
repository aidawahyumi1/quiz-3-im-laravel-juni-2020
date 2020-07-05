@extends('layouts.master')

@section('content-title')
<br>
DAFTAR ARTIKEL<br>
<a href="/" class="btn btn-primary btn-sm">HOME</a>
<a href="/artikel/create" class="btn btn-primary btn-sm">BUAT ARTIKEL</a>
<button class="btn btn-primary btn-sm" name="alert" onclick="alert()">ALERT</button>
@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   @foreach($articles as $key => $article)
   <tr>
   	<td>{{ $key+1 }}</td>
   	<td>{{ $article-> judul }}</td>
   	<td>{{ $article-> isi }}</td>
    <td>
      <a href="/artikel/{{ $article->id }}" class="btn btn-secondary"><span class="fa fa-book"></span> Detail</a>
      <a href="/artikel/{{ $article->id }}/edit" class="btn btn-success"><span class="fa fa-edit "></span> Edit</a>
      <form action="/artikel/{{ $article->id }}" method="POST" style="display: inline;">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-sm btn-danger" style="height: 38px;border-radius: 5px;"><i class="fa fa-trash"></i> Delete</button>
      </form>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection

@push('scripts')
<script>
  function alert(){
   Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
   }
</script>
@endpush