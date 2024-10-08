<!-- resources/views/buku/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for updating the record -->

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $buku->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis', $buku->penulis) }}" required>
        </div>

        <div class="mb-3 w-25">
            <label for="tanggal" class="form-label">Tahun Terbit</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $buku->tanggal) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
