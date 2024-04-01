@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Form {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Ubah Data {{ $pages }}
                <button type="button" class="btn btn-secondary btn-sm"
                    onclick="window.location.href='{{ route('property') }}'">Kembali</button>
            </h5>
            <div class="card-body">
                <form action="{{ route('property.update', $res->property_id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="foto_sampul" class="form-label">Foto Sampul</label>
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset('storage/images/foto_property/' . $res->foto_sampul) }}"
                                alt="{{ $res->foto_sampul }}" class="d-block rounded" height="150" width="300"
                                id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" name="foto_sampul" id="upload" class="account-file-input"
                                        hidden accept="image/png, image/jpeg, image/jpg" />
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2048kb</p>
                            </div>
                        </div>
                        @error('foto_sampul')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="slug">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                            id="slug" placeholder="-" autocomplete="off" value="{{ old('slug', $res->slug) }}"
                            readonly>
                        @error('slug')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="property_name">Nama Properti</label>
                        <input type="text" class="form-control @error('property_name') is-invalid @enderror"
                            name="property_name" id="property_name" placeholder="Property Example 2" autocomplete="off"
                            value="{{ old('property_name') }}">
                        @error('property_name')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="harga">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" id="harga" placeholder="0" min="0" autocomplete="off"
                                    value="{{ old('harga') }}">
                                @error('harga')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="sertifikat">Sertifikat</label>
                                <input type="text" class="form-control @error('sertifikat') is-invalid @enderror"
                                    name="sertifikat" id="sertifikat" placeholder="SHM" autocomplete="off"
                                    value="{{ old('sertifikat') }}">
                                @error('sertifikat')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="kondisi">Kondisi</label>
                                <input type="text" class="form-control @error('kondisi') is-invalid @enderror"
                                    name="kondisi" id="kondisi" placeholder="Cukup Bagus" autocomplete="off"
                                    value="{{ old('kondisi') }}">
                                @error('kondisi')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="luas_tanah">Luas Tanah</label>
                                <input type="number" class="form-control @error('luas_tanah') is-invalid @enderror"
                                    name="luas_tanah" id="luas_tanah" placeholder="0" min="0" autocomplete="off"
                                    value="{{ old('luas_tanah') }}">
                                @error('luas_tanah')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="luas_bangunan">Luas Bangunan</label>
                                <input type="number" class="form-control @error('luas_bangunan') is-invalid @enderror"
                                    name="luas_bangunan" id="luas_bangunan" placeholder="0" min="0"
                                    autocomplete="off" value="{{ old('luas_bangunan') }}">
                                @error('luas_bangunan')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="kelengkapan">Kelengkapan</label>
                                <input type="text" class="form-control @error('kelengkapan') is-invalid @enderror"
                                    name="kelengkapan" id="kelengkapan" placeholder="Full Furnished" autocomplete="off"
                                    value="{{ old('kelengkapan') }}">
                                @error('kelengkapan')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                            id="alamat" placeholder="Jl Diponegoro 2" autocomplete="off"
                            value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="jumlah_lantai">Jumlah Lantai</label>
                                <input type="number" class="form-control @error('jumlah_lantai') is-invalid @enderror"
                                    name="jumlah_lantai" id="jumlah_lantai" placeholder="0" min="0"
                                    autocomplete="off" value="{{ old('jumlah_lantai') }}">
                                @error('jumlah_lantai')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="kamar_tidur">Kamar Tidur</label>
                                <input type="number" class="form-control @error('kamar_tidur') is-invalid @enderror"
                                    name="kamar_tidur" id="kamar_tidur" placeholder="0" min="0"
                                    autocomplete="off" value="{{ old('kamar_tidur') }}">
                                @error('kamar_tidur')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="kamar_mandi">Kamar Mandi</label>
                                <input type="number" class="form-control @error('kamar_mandi') is-invalid @enderror"
                                    name="kamar_mandi" id="kamar_mandi" placeholder="0" min="0"
                                    autocomplete="off" value="{{ old('kamar_mandi') }}">
                                @error('kamar_mandi')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="watt_listrik">Watt Listrik</label>
                        <input type="number" class="form-control @error('watt_listrik') is-invalid @enderror"
                            name="watt_listrik" id="watt_listrik" placeholder="0" min="0" autocomplete="off"
                            value="{{ old('watt_listrik') }}">
                        @error('watt_listrik')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="@error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <small class="text-light fw-medium">Detail Info</small>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="agent_id">Pilih Agent</label>
                                <select name="agent_id" id="agent_id"
                                    class="form-select @error('agent_id') is-invalid @enderror" required>
                                    <option value="">--- Choose ---</option>
                                    @foreach ($agent as $res)
                                        <option value="{{ $res->agent_id }}"
                                            {{ old('agent_id') == $res->agent_id ? 'selected' : '' }}>
                                            {{ $res->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                                @error('agent_id')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="kota_id">Pilih Kota</label>
                                <select name="kota_id" id="kota_id"
                                    class="form-select @error('kota_id') is-invalid @enderror" required>
                                    <option value="">--- Choose ---</option>
                                    @foreach ($kota as $res)
                                        <option value="{{ $res->kota_id }}"
                                            {{ old('kota_id') == $res->kota_id ? 'selected' : '' }}>
                                            {{ $res->nama_kota }}</option>
                                    @endforeach
                                </select>
                                @error('kota_id')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="is_status">Status</label>
                                <select name="is_status" id="is_status"
                                    class="form-select @error('is_status') is-invalid @enderror">
                                    <option value="">--- Choose ---</option>
                                    <option value="1" {{ old('is_status') === '1' ? 'selected' : '' }}>Ready</option>
                                    <option value="0" {{ old('is_status') === '0' ? 'selected' : '' }}>Sale</option>
                                </select>
                                @error('is_status')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#property_name').on('keyup', function() {
                var property_name = $(this).val();
                var slug = property_name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
                $('#slug').val(slug);
            });
        });
    </script>
@endsection
