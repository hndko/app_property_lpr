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
                    <div class="col-lg-7 mb-4">
                        <div class="img-property-slide-wrap">
                            <div class="img-property-slide">
                                <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid" />
                                <img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid" />
                                <img src="{{ asset('assets/images/img_3.jpg') }}" alt="Image" class="img-fluid" />
                            </div>
                        </div>
                        <div class="d-block agent-box text-start">
                            <h2 class="heading text-primary text-decoration-underline">Spesifikasi :</h2>
                            <table class="table">
                                <tr>
                                    <td>Harga</td>
                                    <td>
                                        <span class="caption">Rp 3.000.000.000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sertifikat</td>
                                    <td>
                                        <span class="caption">SHM</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kondisi</td>
                                    <td>
                                        <span class="caption">Cukup Bagus</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luas Tanah</td>
                                    <td>
                                        <span class="caption">432m<sup>2</sup></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luas Bangunan</td>
                                    <td>
                                        <span class="caption">432m<sup>2</sup></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                        <span class="caption">Jl Kedoya Barat</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kelengkapan</td>
                                    <td>
                                        <span class="caption">Full Furnished</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Lantai</td>
                                    <td>
                                        <span class="caption">2 Lantai</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kamar Tidur</td>
                                    <td>
                                        <span class="caption">3 Kamar Tidur</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kamar Mandi</td>
                                    <td>
                                        <span class="caption">3 Kamar Mandi</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Listrik</td>
                                    <td>
                                        <span class="caption">2200 Watt</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="heading text-primary">5232 California Ave. 21BC</h2>
                        <p class="meta">California, United States</p>
                        <p class="text-black-50">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
                            laborum quo quos omnis sed magnam id, ducimus saepe, debitis error
                            earum, iste dicta odio est sint dolorem magni animi tenetur.
                        </p>

                        <div class="d-block agent-box p-5 text-center">
                            <div class="img mb-4">
                                <img src="{{ asset('assets/images/person_2-min.jpg') }}" alt="Image" class="img-fluid" />
                            </div>
                            <div class="text">
                                <h3 class="mb-0">Alicia Huston</h3>
                                <div class="meta mb-3">Agen Properti</div>
                                <ul class="list-unstyled social dark-hover d-flex justify-content-center">
                                    <li class="me-1">
                                        <a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                    <li class="me-1">
                                        <a href="#"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li class="me-1">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="me-1">
                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="row g-2">
                                <div class="col">
                                    <button class="btn btn-outline-dark w-100">
                                        <i class="fab fa-whatsapp fs-5"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-outline-dark w-100">
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
@endsection
