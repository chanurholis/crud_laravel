@extends('layouts.main')

@section('title','Laravel | Mahasiswa')

@section('container')
<div class="container">
    <div class="mt-4">
        <h1 class="text-center">Daftar Mahasiswa</h1>
        <div class="table-responsive">
            <a href="" class="btn btn-primary rounded-0">Mahasiswa Baru</a>
            <table class="table table-bordered mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">NRP</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Jurusan</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                @foreach($mahasiswa as $mhs)
                <tbody>
                    <tr>
                        <td class="text-center" scope="row">{{$loop->iteration}}</td>
                        <td class="text-center">{{$mhs->nama}}</td>
                        <td class="text-center">{{$mhs->nrp}}</td>
                        <td class="text-center">{{$mhs->email}}</td>
                        <td class="text-center">{{$mhs->jurusan}}</td>
                        <td class="text-center">
                            <a href="" class="badge badge-success rounded-0">update</a>
                            <a href="" class="badge badge-danger rounded-0">delete</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
