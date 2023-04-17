@extends('layouts.app')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <div class="pt-3 d-flex justify-content-end align-items-center">
        <h1 class="h2 mr-auto">Biodata {{$signup->nama}}</h1>
        <a href="{{ route('admins.edit',['admin' => $signup->id]) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('admins.destroy',['admin' => $signup->id]) }}" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
      </div>
      <hr>
      @if(session()->has('pesan'))
        <div class="alert alert-success" role="alert">
          {{ session()->get('pesan')}}
        </div>
      @endif
  
      <ul>
        <li>NIM: {{$signup->nim}} </li>
        <li>Nama: {{$signup->nama}} </li>
        <li>Email: {{$signup->email}} </li>
        <li>Role: {{$signup->role}} </li>
      </ul>
  
    </div>
  </div>
</div>
@endsection
