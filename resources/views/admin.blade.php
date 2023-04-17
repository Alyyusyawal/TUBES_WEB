@extends('layouts.app')

@section('content')
    
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    
                    <div class="card-body">
                        <h1>Ini adalah Halaman Admin</h1>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Notifications!</strong> Ada 10 User Mahasiswa yang belum melakukan verifikasi.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Notifications!</strong> Ada 10 Guest yang belum melakukan daftar ulang.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Notifications!</strong> Ada 5 Dosen yang sudah upload materi di e-learning.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container mt-3">
        <div class="row">
          <div class="col-12">
    
            <div class="py-4 d-flex justify-content-end align-item-center">
              <h2 class="mr-auto">Tabel Admins</h2>
              <a href="{{ route('admins.create') }}" class="btn btn-primary">
                Tambah Admin</a>
            </div>
    
            @if(session()->has('pesan'))
              <div class="alert alert-success">
                {{ session()->get('pesan') }}
              </div>
            @endif
    
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($signups as $admin)
                <tr>
                  <th>{{ $loop->iteration }}</th>
                  <td>{{ $admin->nim }}</td>
                  <td>{{ $admin->nama }}</td>
                  <td>{{ $admin->email }}</td>
                  <td>{{ $admin->role }}</td>
                  <td>
                    <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus admin ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @empty
                  <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
      
    
@endsection