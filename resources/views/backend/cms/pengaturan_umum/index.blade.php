@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Form {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Ubah Data {{ $pages }}
            </h5>
            <div class="card-body">
                <form action="{{ route('pengaturan-umum.update', $res->pu_id) }}" method="POST">

                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="nama_website">Nama Website</label>
                        <input type="text" class="form-control @error('nama_website') is-invalid @enderror"
                            name="nama_website" id="nama_website" placeholder="Jakarta" autocomplete="off"
                            value="{{ old('nama_website', $res->nama_website) }}" autocomplete="off">
                        @error('nama_website')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                            id="alamat" placeholder="Jakarta" autocomplete="off"
                            value="{{ old('alamat', $res->alamat) }}" autocomplete="off">
                        @error('alamat')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="no_telpon">No Telepon</label>
                                <input type="text" name="no_telpon" id="no_telpon"
                                    class="form-control @error('no_telpon') is-invalid @enderror"
                                    aria-describedby="no_telpon" autocomplete="off"
                                    value="{{ old('no_telpon', $res->no_telpon) }}" autocomplete="off">
                                @error('no_telpon')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Jakarta" autocomplete="off"
                                    value="{{ old('email', $res->email) }}">
                                @error('email')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="day_start">Day Start</label>
                                <select name="day_start" id="day_start"
                                    class="form-select @error('day_start') is-invalid @enderror">
                                    <option value="">--- Choose ---</option>
                                    <option value="Senin"
                                        {{ old('day_start', $res->day_start) === 'Senin' ? 'selected' : '' }}>
                                        Senin</option>
                                    <option value="Selasa"
                                        {{ old('day_start', $res->day_start) === 'Selasa' ? 'selected' : '' }}>
                                        Selasa</option>
                                    <option value="Rabu"
                                        {{ old('day_start', $res->day_start) === 'Rabu' ? 'selected' : '' }}>
                                        Rabu</option>
                                    <option value="Kamis"
                                        {{ old('day_start', $res->day_start) === 'Kamis' ? 'selected' : '' }}>
                                        Kamis</option>
                                    <option value="Jumat"
                                        {{ old('day_start', $res->day_start) === 'Jumat' ? 'selected' : '' }}>
                                        Jumat</option>
                                    <option value="Sabtu"
                                        {{ old('day_start', $res->day_start) === 'Sabtu' ? 'selected' : '' }}>
                                        Sabtu</option>
                                    <option value="Minggu"
                                        {{ old('day_start', $res->day_start) === 'Minggu' ? 'selected' : '' }}>
                                        Minggu</option>
                                </select>
                                @error('day_start')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="day_end">Day End</label>
                                <select name="day_end" id="day_end"
                                    class="form-select @error('day_end') is-invalid @enderror">
                                    <option value="">--- Choose ---</option>
                                    <option value="Senin"
                                        {{ old('day_end', $res->day_end) === 'Senin' ? 'selected' : '' }}>
                                        Senin</option>
                                    <option value="Selasa"
                                        {{ old('day_end', $res->day_end) === 'Selasa' ? 'selected' : '' }}>
                                        Selasa</option>
                                    <option value="Rabu"
                                        {{ old('day_end', $res->day_end) === 'Rabu' ? 'selected' : '' }}>
                                        Rabu</option>
                                    <option value="Kamis"
                                        {{ old('day_end', $res->day_end) === 'Kamis' ? 'selected' : '' }}>
                                        Kamis</option>
                                    <option value="Jumat"
                                        {{ old('day_end', $res->day_end) === 'Jumat' ? 'selected' : '' }}>
                                        Jumat</option>
                                    <option value="Sabtu"
                                        {{ old('day_end', $res->day_end) === 'Sabtu' ? 'selected' : '' }}>
                                        Sabtu</option>
                                    <option value="Minggu"
                                        {{ old('day_end', $res->day_end) === 'Minggu' ? 'selected' : '' }}>
                                        Minggu</option>
                                </select>
                                @error('day_end')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="hours_start">Hours Start</label>
                                <input type="time" name="hours_start" id="hours_start"
                                    class="form-control @error('hours_start') is-invalid @enderror"
                                    value="{{ old('hours_start', $res->hours_start) }}">
                                @error('hours_start')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="hours_end">Hours End</label>
                                <input type="time" name="hours_end" id="hours_end"
                                    class="form-control @error('hours_end') is-invalid @enderror"
                                    value="{{ old('hours_end', $res->hours_end) }}">
                                @error('hours_end')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="instagram">Instagram</label>
                                <input type="text" name="instagram" id="instagram"
                                    class="form-control @error('instagram') is-invalid @enderror"
                                    placeholder="ladang.padiresor" value="{{ old('instagram', $res->instagram) }}"
                                    autocomplete="off">
                                @error('instagram')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="twitter">Twitter</label>
                                <input type="text" name="twitter" id="twitter"
                                    class="form-control @error('twitter') is-invalid @enderror"
                                    placeholder="ladang.padiresor" value="{{ old('twitter', $res->twitter) }}"
                                    autocomplete="off">
                                @error('twitter')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="facebook">Facebook</label>
                                <input type="text" name="facebook" id="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    placeholder="ladang.padiresor" value="{{ old('facebook', $res->facebook) }}"
                                    autocomplete="off">
                                @error('facebook')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="linkedin">Linkedin</label>
                                <input type="text" name="linkedin" id="linkedin"
                                    class="form-control @error('linkedin') is-invalid @enderror"
                                    placeholder="ladang.padiresor" value="{{ old('linkedin', $res->linkedin) }}"
                                    autocomplete="off">
                                @error('linkedin')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
