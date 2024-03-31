@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Daftar {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header">Tabel {{ $pages }}</h5>
            <div class="card-body table-responsive text-nowrap">
                <table class="table" id="dataTable">
                    <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Rating</th>
                            <th>Nama</th>
                            <th>Ulasan</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($result as $index => $res)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $res->rating }}</td>
                                <td>{{ $res->nama_lengkap }}</td>
                                <td>{{ $res->text_ulasan }}</td>
                                <td>{{ $res->jabatan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
