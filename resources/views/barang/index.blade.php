@extends('layouts.main')
@section('content')
<div class="container">
    <h2>Data Buku</h2>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah barang</a>
        <table class="table">
            <thead> <tr> <th>Kode barang</th>
                <th>nama</th>
                    <th>harga</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($ecos as $eco)
                    <tr>
                    <td>{{ $eco->kode }}</td>
                    <td>{{ $eco->nama }}</td>
                        <td>{{ $eco->harga }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $eco->id) }}" class="btn btn-warning">Edit</a> <form
                            action="{{ route('barang.destroy', $eco->id) }}" method="POST" style="display:inline"> @csrf
                            @method('DELETE') <button type="submit" class="btn btn-danger" onclick="return
                            confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button> </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
</div>
@endsection