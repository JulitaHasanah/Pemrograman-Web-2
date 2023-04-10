@extends('layouts.mainAdmin')

@section('breadcrumbs')
<h3 class="text-center">Edit Data Menu</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="./../updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
            
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value = "{{ $data->nama }}" > 
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Apload Gambar</label>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" class="form-control" aria-label="Pilih Kategori">
                            <option selected value => {{ $data->kategori }} </option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>       
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value = "{{ $data->deskripsi }}">
                    </div>
                    
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
