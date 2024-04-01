@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Daftar {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Tabel {{ $pages }}
                <button type="button" class="btn btn-primary btn-sm"
                    onclick="window.location.href='{{ route('property.create') }}'">Tambah Data</button>
            </h5>
            <div class="card-body table-responsive text-nowrap">
                <table class="table" id="dataTable">
                    <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Picture</th>
                            <th>Nama Properti</th>
                            <th>Kota</th>
                            <th>Agent</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($result as $index => $res)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="{{ asset('storage/images/foto_property/' . $res->foto_sampul) }}"
                                        alt="" style="width: 100px"></td>
                                <td>{{ $res->property_name }}</td>
                                <td>{{ $res->kota->nama_kota }}</td>
                                <td>{{ $res->agent->nama_lengkap }}</td>
                                <td>@rupiahIndo($res->harga)</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="window.location.href='{{ route('property.edit', $res->property_id) }}'">
                                        <i class='bx bxs-edit-alt'></i>
                                    </button>
                                    <form action="{{ route('property.destroy', $res->property_id) }}" method="POST">
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
