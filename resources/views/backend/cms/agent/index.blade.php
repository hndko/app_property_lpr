@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Daftar {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Tabel {{ $pages }}
                <button type="button" class="btn btn-primary btn-sm"
                    onclick="window.location.href='{{ route('agent.create') }}'">Tambah Data</button>
            </h5>
            <div class="card-body table-responsive text-nowrap">
                <table class="table" id="dataTable">
                    <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Lengkap</th>
                            <th>No Telpon</th>
                            <th>Instagram</th>
                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Linkedin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($result as $index => $res)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="{{ asset('storage/images/foto_sampul/' . $res->foto_sampul) }}" alt=""
                                        style="width: 50px"></td>
                                <td>{{ $res->nama_lengkap }}</td>
                                <td>{{ $res->no_telpon }}</td>
                                <td>{{ $res->instagram === null ? '-' : $res->instagram }}</td>
                                <td>{{ $res->twitter === null ? '-' : $res->twitter }}</td>
                                <td>{{ $res->facebook === null ? '-' : $res->facebook }}</td>
                                <td>{{ $res->linked_in === null ? '-' : $res->linked_in }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="window.location.href='{{ route('agent.edit', $res->agent_id) }}'">
                                        <i class='bx bxs-edit-alt'></i>
                                    </button>
                                    <form action="{{ route('agent.destroy', $res->agent_id) }}" method="POST">
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
