@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Form {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Ubah Data {{ $pages }}
                <button type="button" class="btn btn-secondary btn-sm"
                    onclick="window.location.href='{{ route('agent') }}'">Kembali</button>
            </h5>
            <div class="card-body">
                <form action="{{ route('agent.update', $res->agent_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="foto_sampul" class="form-label">Foto Sampul</label>
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset('storage/images/foto_sampul/' . $res->foto_sampul) }}" alt="user-avatar"
                                class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" name="foto_sampul" id="upload" class="account-file-input"
                                        hidden accept="image/png, image/jpeg" />
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
                        <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                            name="nama_lengkap" id="nama_lengkap" placeholder="John Doe" autocomplete="off"
                            value="{{ old('nama_lengkap', $res->nama_lengkap) }}">
                        @error('nama_lengkap')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="no_telpon">No Telpon/Whatsapp</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="no_telpon">62</span>
                            <input type="text" name="no_telpon" id="no_telpon"
                                class="form-control @error('no_telpon') is-invalid @enderror" placeholder="8xxxxxxxxxx"
                                aria-label="8xxxxxxxxxx" aria-describedby="no_telpon" oninput="removeLeadingZero(this)"
                                autocomplete="off" value="{{ old('no_telpon', $res->no_telpon) }}">
                        </div>
                        @error('no_telpon')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="instagram">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                            id="instagram" placeholder="john.doe" autocomplete="off"
                            value="{{ old('instagram', $res->instagram) }}">
                        @error('instagram')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="twitter">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                            id="twitter" placeholder="john.doe" autocomplete="off"
                            value="{{ old('twitter', $res->twitter) }}">
                        @error('twitter')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="facebook">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                            id="facebook" placeholder="john.doe" autocomplete="off"
                            value="{{ old('facebook', $res->facebook) }}">
                        @error('facebook')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="linked_in">Linkedin</label>
                        <input type="text" class="form-control @error('linked_in') is-invalid @enderror"
                            name="linked_in" id="linked_in" placeholder="john.doe" autocomplete="off"
                            value="{{ old('linked_in', $res->linked_in) }}">
                        @error('linked_in')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function removeLeadingZero(input) {
            input.value = input.value.replace(/^0+/, '');
        }
    </script>
@endsection
