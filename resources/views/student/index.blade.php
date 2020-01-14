@extends('layouts.main')

@section('title','Laravel | Student')

@section('container')
<div class="container">
    <div class="mt-4">
        <h1 class="text-center">Daftar Student</h1>
        <a href="/Student/create" class="btn btn-primary rounded-0">Student Baru</a>
        <div class="mt-3">
            <ul class="list-group col-6">
            @if (session('status'))
                <div class="alert alert-success rounded-0">
                    {{ session('status') }}
                </div>
            @endif
            @foreach ($student as $std)
                <li class="list-group-item d-flex justify-content-between align-items-center rounded-0">
                    {{$std->nama}}
                <a href="/Student/{{$std->id}}" class="badge badge-info rounded-0">detail</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
