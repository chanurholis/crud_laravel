@extends('layouts.main')

@section('title','Laravel | Student Baru')

@section('container')
<div class="container">
    <div class="mt-4">
        <h1 class="text-center">Form Tambah Data Student</h1>
        <br>
        <div class="m-auto col-6">
            <form method="post" action="/Student">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" type="text" name="nama" class="form-control rounded-0" autofocus value="{{old('nama')}}">
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input id="nrp" type="number" name="nrp" class="form-control rounded-0" value="{{old('nrp')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control rounded-0" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input id="jurusan" type="text" name="jurusan" class="form-control rounded-0" value="{{old('jurusan')}}">
                </div>
                <button type="submit" class="btn btn-primary rounded-0">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection