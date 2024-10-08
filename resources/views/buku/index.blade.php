@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
            <?php $no = 1;?>
                @foreach($buku as $bk)
                    <tr>
                        <td width="10%"><?php echo $no++;?></td>
                        <td width="30%">{{ $bk->judul }}</td>
                        <td width="20%">{{ $bk->penulis }}</td>
                        <td width="20%">{{ $bk->tanggal }}</td>
                        <td width="20%">
                            <a href="{{ route('buku.edit', $bk->id) }}" class="btn btn-warning" >Edit</a>
                            <form action="{{ route('buku.destroy', $bk->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
