@extends('layouts.app')

@section('content')

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Edit</h1>

      <form action="{{ route('admins.update', ['signup'=>$signup->id]) }}" method="POST">
        @method('PATCH')
        @csrf
      
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text"
                 class="form-control @error('nama') is-invalid @enderror"
                 id="nama" name="nama"
                 value="{{ old('nama') ?? $signup->nama }}">
          @error('nama')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="NIM">NIM</label>
          <input type="text"
                 class="form-control @error('NIM') is-invalid @enderror"
                 id="NIM" name="NIM"
                 value="{{ old('NIM') ?? $signup->NIM }}">
          @error('NIM')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
                 class="form-control @error('email') is-invalid @enderror"
                 id="email" name="email"
                 value="{{ old('email') ?? $signup->email }}">
          @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
          value="{{ old('password') ?? $signup->password }}">
          @error('password')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      
        <div class="form-group">
          <label>Role</label>
          <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="admin" value="admin" {{ old('role') == 'admin' || $signup->role == 'admin' ? 'checked' : '' }}>
              <label class="form-check-label" for="admin">Admin</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="student" value="student" {{ old('role') == 'student' || $signup->role == 'student' ? 'checked' : '' }}>
              <label class="form-check-label" for="student">Student</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="lecture" value="lecture" {{ old('role') == 'lecture' || $signup->role == 'lecture' ? 'checked' : '' }}>
              <label class="form-check-label" for="lecture">Lecture</label>
            </div>
            @error('role')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
      
        <button type="submit" class="btn btn-primary mb-2">Update</button>
      </form>
      
    </div>
  </div>
</div>

@endsection
