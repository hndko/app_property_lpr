@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Daftar {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Tabel {{ $pages }}
                <button type="button" class="btn btn-primary btn-sm"
                    onclick="window.location.href='{{ route('kota.create') }}'">Tambah Data</button>
            </h5>
            <div class="card-body table-responsive text-nowrap">
                <table class="table" id="dataTable">
                    <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Nama Kota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($result as $index => $res)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $res->nama_kota }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="window.location.href='{{ route('kota.edit', $res->kota_id) }}'">
                                        <i class='bx bxs-edit-alt'></i>
                                    </button>
                                    <form action="{{ route('kota.destroy', $res->kota_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                            <i class='bx bxs-trash'></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
