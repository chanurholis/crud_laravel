@extends('layouts.main')

@section('title','Laravel | Student')

@section('container')
<div class="container">
    <div class="mt-4">
        <h1 class="text-center">Detail Student</h1>
        <br>
        <div class="m-auto col-6">
            <div class="card rounded-0 m-auto">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <button type="submit" class="btn btn-primary rounded-0">Edit</button>
                    <button type="submit" class="btn btn-danger rounded-0">Delete</button>
                    <a href="/Student" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
