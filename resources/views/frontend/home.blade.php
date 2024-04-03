@extends('frontend.templates.app')
@section('content')
    <main>
        <div class="hero">
            <div class="hero-slide">
                <div class="img overlay" style="background-image: url('{{ asset('assets/images/hero_bg_3.jpg') }}')">
                </div>
                <div class="img overlay" style="background-image: url('{{ asset('assets/images/hero_bg_2.jpg') }}')">
                </div>
                <div class="img overlay" style="background-image: url('{{ asset('assets/images/hero_bg_1.jpg') }}')">
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center">
                        <h1 class="heading" data-aos="fade-up">
                            Temukan rumah impian Anda dengan mudah
                        </h1>
                        <form action="{{ route('properties.search') }}" method="GET"
                            class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                            data-aos-delay="200">
                            <input type="text" name="keyword" class="form-control px-4"
                                placeholder="Masukan Nama Kota. Misalnya, Jakarta" />
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-6">
                        <h2 class="font-weight-bold text-primary heading">
                            Properti Terbaru
                        </h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <p>
                            <a href="{{ route('properties') }}" target="_blank"
                                class="btn btn-primary btn-sm text-white py-3 px-4">Lihat semua
                                properti</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="property-slider-wrap">
                            <div class="property-slider">
                                @if ($properties->isEmpty())
                                    Properti Belum Tersedia
                                @else
                                    @foreach ($properties as $property)
                                        <div class="property-item">
                                            <a href="{{ route('properties.show', $property->slug) }}" class="img">
                                                <img src="{{ asset('storage/images/foto_property/' . $property->foto_sampul) }}"
                                                    alt="Image" class="img-fluid" style="width: 500px; height: 350px;">
                                            </a>
                                            <div class="property-content">
                                                <div class="price mb-2"><span>@rupiahIndo($property->harga)</span></div>
                                                <div>
                                                    <span class="d-block mb-2 text-black-50">{{ $property->alamat }}</span>
                                                    <span class="city d-block mb-3">{{ $property->kota->nama_kota }}</span>
                                                    <div class="specs d-flex mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-bed me-2"></span>
                                                            <span class="caption">{{ $property->kamar_tidur }} kamar
                                                                tidur</span>
                                                        </span>
                                                        <span class="d-block d-flex align-items-center">
                                                            <span class="icon-bath me-2"></span>
                                                            <span class="caption">{{ $property->kamar_mandi }} kamar
                                                                mandi</span>
                                                        </span>
                                                    </div>
                                                    @if ($property->is_status == '1')
                                                        <a href="{{ route('properties.show', $property->slug) }}"
                                                            class="btn btn-primary py-2 px-3">Lihat detail</a>
                                                    @else
                                                        <button type="button" class="btn btn-danger py-2 px-3">Sudah
                                                            Terjual</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                                <span class="prev" data-controls="prev" aria-controls="property"
                                    tabindex="-1">Sebelumnya</span>
                                <span class="next" data-controls="next" aria-controls="property"
                                    tabindex="-1">Selanjutnya</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-1">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="box-feature">
                            <span class="flaticon-house"></span>
                            <h3 class="mb-3">Properti Kami</h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="box-feature">
                            <span class="flaticon-building"></span>
                            <h3 class="mb-3">Properti Dijual</h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Agen Real Estate</h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature">
                            <span class="flaticon-house-1"></span>
                            <h3 class="mb-3">Rumah Dijual</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section sec-testimonials">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                            Ulasan Pelanggan
                        </h2>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev">Sebelumnya</span>
                            <span class="next" data-controls="next">Selanjutnya</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4"></div>
                </div>
                <div class="testimonial-slider-wrap">
                    <div class="testimonial-slider">
                        @if ($ulasan->isEmpty())
                            <div class="item">
                                <div class="testimonial">
                                    <p>Maaf, belum ada ulasan.</p>
                                </div>
                            </div>
                        @else
                            @foreach ($ulasan as $ulasanItem)
                                <div class="item">
                                    <div class="testimonial">
                                        <img src="{{ asset('assets/images/default.png') }}" alt="Image"
                                            class="img-fluid rounded-circle w-25 mb-4" />
                                        <div class="rate">
                                            @for ($i = 0; $i < $ulasanItem->rating; $i++)
                                                <span class="icon-star text-warning"></span>
                                            @endfor
                                        </div>
                                        <h3 class="h5 text-primary mb-4">{{ $ulasanItem->nama_lengkap }}</h3>
                                        <blockquote>
                                            <p>&ldquo;{{ $ulasanItem->text_ulasan }}&rdquo;</p>
                                        </blockquote>
                                        <p class="text-black-50">{{ $ulasanItem->jabatan }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-4 bg-light">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-5">
                        <h2 class="font-weight-bold heading text-primary mb-4">
                            Temukan rumah yang sempurna untuk Anda
                        </h2>
                        <p class="text-black-50">
                            Mari temukan rumah yang cocok untuk Anda, dengan pilihan yang luas dan pelayanan terpercaya.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-between mb-5">
                    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                        <div class="img-about dots">
                            <img src="{{ asset('assets/images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <span class="icon-home2"></span>
                            </span>
                            <div class="feature-text">
                                <h3 class="heading">Pilihan Properti Beragam</h3>
                                <p class="text-black-50">
                                    Temukan beragam pilihan properti yang nyaman dan terjangkau untuk memenuhi kebutuhan
                                    Anda.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <span class="icon-person"></span>
                            </span>
                            <div class="feature-text">
                                <h3 class="heading">Agen Terbaik</h3>
                                <p class="text-black-50">
                                    Temui agen-agen terbaik dengan pelayanan terpercaya untuk kebutuhan properti Anda.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <span class="icon-security"></span>
                            </span>
                            <div class="feature-text">
                                <h3 class="heading">Properti Legal</h3>
                                <p class="text-black-50">
                                    Temukan properti yang legal dan terpercaya untuk investasi masa depan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row section-counter mt-5 text-center">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="counter-wrap mb-5 mb-lg-0">
                            <span class="number"><span class="countup text-primary">{{ $propertiesCount }}</span></span>
                            <span class="caption text-black-50">Jumlah Properti</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="counter-wrap mb-5 mb-lg-0">
                            <span class="number"><span class="countup text-primary">{{ $agentCount }}</span></span>
                            <span class="caption text-black-50">Jumlah Agen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="row justify-content-center footer-cta" data-aos="fade-up">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4">Jadilah Bagian dari Agen Properti Kami yang Berkembang</h2>
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=628123456789&text=Halo%2C%20saya%20tertarik%20untuk%20menjadi%20agen%20properti%20di%20perusahaan%20Anda."
                            target="_blank" class="btn btn-primary text-white py-3 px-4">Daftar sebagai Agen Properti</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
