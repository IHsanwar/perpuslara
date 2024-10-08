<!-- resources/views/buku/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Buku Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis') }}" required>
        </div>

        <div class="mb-3 w-25">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </form>
</div>
@endsection
