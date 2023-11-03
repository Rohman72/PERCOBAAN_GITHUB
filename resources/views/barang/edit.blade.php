@extends('layouts.main')
@section('content')
<div class="container">
    <h2>Edit barang</h2>
        <form action="{{ route('barang.update',$eco->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group"> <label for="kode">Kode</label> <input type="text" name="kode"
            class="form-control" value="{{$eco->kode }}" required>
            </div> <div class="form-group"> <label for="nama">nama</label> <input type="text" name="nama"
                class="form-control" value="{{
$eco->nama }}" required>
</div>
<div class=" form-group">
            <label for="harga">harga</label> <input type="text" name="harga" class="form-control" value="{{
               $eco->harga }}" required>
                </div> <button type="submit" class="btn btn-primary">Simpan Perubahan</button> </form>
        </div>
        @endsection