@extends('frontend.templates.app')
@section('content')
    <main>
        <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/images/hero_bg_1.jpg') }}')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Properties</h1>

                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Properties
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-7">
                        <div class="img-property-slide-wrap">
                            <div class="img-property-slide">
                                @if ($sliders->isEmpty())
                                    <img src="{{ asset('assets/images/default-property.png') }}" alt="Slider Image"
                                        class="img-fluid">
                                @else
                                    @foreach ($res->sliders as $slider)
                                        <img src="{{ asset('storage/images/foto_slider/' . $slider->foto_slider) }}"
                                            alt="Slider Image" class="img-fluid vh-100">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="d-block agent-box text-start">
                            <h2 class="heading text-primary text-decoration-underline">Spesifikasi :</h2>
                            <table class="table">
                                <tr>
                                    <td>Harga</td>
                                    <td>
                                        <span class="caption">@rupiahIndo($res->harga)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sertifikat</td>
                                    <td>
                                        <span class="caption">{{ $res->sertifikat }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kondisi</td>
                                    <td>
                                        <span class="caption">{{ $res->kondisi }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luas Tanah</td>
                                    <td>
                                        <span class="caption">{{ $res->luas_tanah }}m<sup>2</sup></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luas Bangunan</td>
                                    <td>
                                        <span class="caption">{{ $res->luas_bangunan }}m<sup>2</sup></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                        <span class="caption">J{{ $res->alamat }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kelengkapan</td>
                                    <td>
                                        <span class="caption">{{ $res->kelengkapan }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Lantai</td>
                                    <td>
                                        <span class="caption">{{ $res->jumlah_lantai }} Lantai</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kamar Tidur</td>
                                    <td>
                                        <span class="caption">{{ $res->kamar_tidur }} Kamar Tidur</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kamar Mandi</td>
                                    <td>
                                        <span class="caption">{{ $res->kamar_mandi }} Kamar Mandi</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Listrik</td>
                                    <td>
                                        <span class="caption">{{ $res->watt_listrik }} Watt</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="heading text-primary">{{ $res->property_name }}</h2>
                        <p class="meta">{{ $res->kota->nama_kota }}</p>
                        <p class="text-black-50">
                            {!! $res->deskripsi !!}
                        </p>

                        <div class="d-block agent-box p-5 text-center">
                            <div class="img mb-4">
                                <img src="{{ asset('assets/images/default.png') }}" alt="Image" class="img-fluid" />
                            </div>
                            <div class="text">
                                <h3 class="mb-0">{{ $res->agent->nama_lengkap }}</h3>
                                <div class="meta mb-3">Agen Properti</div>
                                <ul class="list-unstyled social dark-hover d-flex justify-content-center">
                                    <li class="me-1">
                                        <a href="{{ $res->agent->instagram }}"><span class="icon-instagram"></span></a>
                                    </li>
                                    <li class="me-1">
                                        <a href="{{ $res->agent->twitter }}"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li class="me-1">
                                        <a href="{{ $res->agent->facebook }}"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="me-1">
                                        <a href="{{ $res->agent->linkedin }}"><span class="icon-linkedin"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="row g-2">
                                <div class="col">
                                    <button class="btn btn-outline-dark w-100"
                                        onclick="openWhatsApp('{{ $res->agent->no_telpon }}')">
                                        <i class="fab fa-whatsapp fs-5"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-outline-dark w-100"
                                        onclick="openPhone('{{ $res->agent->no_telpon }}')">
                                        <i class="fas fa-phone-alt fs-6"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function openWhatsApp(number) {
            window.open('https://api.whatsapp.com/send?phone=62' + number, '_blank');
        }

        function openPhone(number) {
            window.open('tel:' + number);
        }
    </script>
@endsection
