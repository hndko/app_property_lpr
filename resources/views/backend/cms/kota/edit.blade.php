@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Form {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Ubah Data {{ $pages }}
                <button type="button" class="btn btn-secondary btn-sm"
                    onclick="window.location.href='{{ route('kota') }}'">Kembali</button>
            </h5>
            <div class="card-body">
                <form action="{{ route('kota.update', $res->kota_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="nama_kota">Nama Kota</label>
                        <input type="text" class="form-control @error('nama_kota') is-invalid @enderror" name="nama_kota"
                            id="nama_kota" placeholder="jakarta" autocomplete="off"
                            value="{{ old('nama_kota', $res->nama_kota) }}">
                        @error('nama_kota')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
