@extends('layouts.mainAdmin')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <a href="{{ route('karyawan.create') }}" class="btn btn-success">Tambah Data </a> <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Pasword</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
    
            @foreach ($karyawans as $item)
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->pasword }}</td>
                <td>
                    <a href="{{ route('karyawan.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('karyawan.destroy',$item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
                   </form>
                   
                </td>
            </tr>
    
            @php
                $no++;
            @endphp
            @endforeach
        </tbody>
    </table>
    </div>
</div><!-- .content -->
@endsection
