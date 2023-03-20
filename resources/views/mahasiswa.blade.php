@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card text-center">
                    <div class="card-header">
                        
                        <h1>Mata Kuliah</h1>
                    </div>
                    <a href="{{ url('presensi') }}" class="btn btn-primary" tabindex="-1" role="button" aria-pressed="true">Matematika Komputer</a>
                    <a href="{{ url('presensi') }}" class="btn btn-primary" tabindex="-1" role="button" aria-pressed="true">Komunikasi Data</a>
                    <a href="{{ url('presensi') }}" class="btn btn-primary" tabindex="-1" role="button" aria-pressed="true">Pemrograman Web</a>
                    <a href="{{ url('presensi') }}" class="btn btn-primary" tabindex="-1" role="button" aria-pressed="true">Probabilitas dan Stastika</a>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
@endsection