@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card text-center">
                    <div class="card-header">
                        
                        <h1>Data Mahasiswa</h1>
                    </div>
                    @foreach($data as $datas)
                    <div class="card-body">
                        <h5 class="card-title"><li>{{$datas}}</li></h5>
                    </div>

                    @endforeach
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
@endsection