@extends('layouts.main')
@section('content')
<div class="container">
    <h2>Tambah barang</h2>
        <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group"> <label for="kode">Kode barang</label> <input type="text" name="kode"
            class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <input type="text" name="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
</div>
@endsection