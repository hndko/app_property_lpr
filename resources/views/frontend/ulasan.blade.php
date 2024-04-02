@extends('frontend.templates.app')
@section('content')
    <main>
        <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/images/hero_bg_1.jpg') }}')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Berikan Ulasan Terbaik Anda Untuk Kami</h1>

                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Ulasan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                        <form action="{{ route('tulis-ulasan.store') }}" method="POST">
                            @csrf <!-- Tambahkan CSRF token -->
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                        placeholder="Nama anda" autocomplete="off" value="{{ old('nama_lengkap') }}">
                                    @error('nama_lengkap')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 mb-3">
                                    <input type="text" name="jabatan" id="jabatan" class="form-control"
                                        placeholder="Jabatan anda" autocomplete="off" value="{{ old('jabatan') }}">
                                    @error('jabatan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="text_ulasan" id="text_ulasan" cols="30" rows="7" class="form-control"
                                        placeholder="Isi ulasan anda ...">{{ old('text_ulasan') }}</textarea>
                                    @error('text_ulasan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <p>Rating:</p>
                                    <div class="rating">
                                        <input type="radio" id="star5" name="rating" value="5" />
                                        <label for="star5" title="5 stars"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star4" name="rating" value="4" />
                                        <label for="star4" title="4 stars"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star3" name="rating" value="3" />
                                        <label for="star3" title="3 stars"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star2" name="rating" value="2" />
                                        <label for="star2" title="2 stars"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star1" name="rating" value="1" />
                                        <label for="star1" title="1 star"><i class="fas fa-star"></i></label>
                                    </div>
                                    @error('rating')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
