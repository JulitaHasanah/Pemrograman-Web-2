@extends('layouts.mainAdmin')

@section('breadcrumbs')
<h3 class="text-center">Edit Data Karyawan</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="id_input" class="form-label">Id Karyawan</label>
                        <input type="text" class="form-control" name="idInput" id="id_input" value="{{ $karyawan->id }}">
                 </div>
                    <div class="mb-3">
                            <label for="nama_input" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="namaInput" id="nama_input" value="{{ $karyawan->nama }}">
                     </div>
                    <div class="mb-3">
                            <label for="pasword_input" class="form-label">Pasword</label>
                           <input type="text" class="form-control" id="pasword_input" name="paswordInput" value="{{ $karyawan->pasword }}">
                    </div>
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
               </form>
               
            </div>
        </div>
    </div>
@endsection
