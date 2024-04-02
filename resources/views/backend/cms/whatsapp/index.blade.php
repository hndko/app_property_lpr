@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Form {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Ubah Data {{ $pages }}
            </h5>
            <div class="card-body">
                <form action="{{ route('whatsapp.update', $res->whatsapp_id) }}" method="POST">

                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="no_telpon">No Whatsapp</label>
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
                        <label class="form-label" for="text_whatsapp">Text</label>
                        <input type="text" class="form-control @error('text_whatsapp') is-invalid @enderror"
                            name="text_whatsapp" id="text_whatsapp" placeholder="Jakarta" autocomplete="off"
                            value="{{ old('text_whatsapp', $res->text_whatsapp) }}">
                        @error('text_whatsapp')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
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
