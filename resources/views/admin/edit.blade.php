@extends('layouts.app')

@section('content')

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Edit Mahasiswa</h1>
      <hr>

      <form action="{{ route('admins.update', ['signup'=>$admin->id]) }}" method="POST">
        @method('PATCH')
        @csrf
      
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text"
                 class="form-control @error('name') is-invalid @enderror"
                 id="name" name="name"
                 value="{{ old('name') ?? $admin->name }}">
          @error('name')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
                 class="form-control @error('email') is-invalid @enderror"
                 id="email" name="email"
                 value="{{ old('email') ?? $admin->email }}">
          @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text"
                 class="form-control @error('nim') is-invalid @enderror"
                 id="nim" name="nim"
                 value="{{ old('nim') ?? $admin->nim }}">
          @error('nim')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      
        <div class="form-group">
          <label>Role</label>
          <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="admin" value="admin" {{ old('role') == 'admin' || $admin->role == 'admin' ? 'checked' : '' }}>
              <label class="form-check-label" for="admin">Admin</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="student" value="student" {{ old('role') == 'student' || $admin->role == 'student' ? 'checked' : '' }}>
              <label class="form-check-label" for="student">Student</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="lecture" value="lecture" {{ old('role') == 'lecture' || $admin->role == 'lecture' ? 'checked' : '' }}>
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
