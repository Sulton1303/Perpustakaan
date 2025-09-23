@extends('app')

@section('content')
    <h1>Selamat Datang di Halaman Daftar Buku</h1>
    <div>
        <a href="/tambah-buku"><button>Tambah Buku</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
            </tr>
        </thead>

        <tbody>
            @if ($data == null)
                <td>Tidak Ada Data Yang Ditampilkan</td>
            @else
                @foreach ($data as $buku)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection