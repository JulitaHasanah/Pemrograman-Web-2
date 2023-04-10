@extends('../layouts.mainAdmin')

@section('title', 'Dashboard')

@section('breadcrumbs')

@endsection
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
    
    <a href="./tambahmenu" class="btn btn-success">Tambah Data </a> <br><br>
    <table class="table">

        <thead>
            <tr>

                
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
    
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $item->nama }}</td>
                <td>
                    <img src="{{asset('gambarmenu/'.$item->gambar)}}" style="width: 55px" alt="">
                </td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="./tampilkandata/{{ $item->id }}" class="btn btn-info">Edit</a>
                    <a href="./delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                    
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
