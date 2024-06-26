@extends('frontend.templates.app')
@section('content')
    <main>
        <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/images/hero_bg_1.jpg') }}')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Properti</h1>

                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Properti
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @if ($properties->isEmpty())
            <div class="section section-properties">
                <div class="container">
                    <div class="col-12 text-center">
                        <p>Belum ada data properti yang tersedia.</p>
                    </div>
                </div>
            </div>
        @else
            <div class="section section-properties">
                <div class="container">
                    <div class="row">
                        @foreach ($properties as $property)
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="property-item mb-30">
                                    <div class="property-item mb-30">
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

                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="row align-items-center py-5">
                        <div class="col-lg-3">Daftar ({{ $properties->currentPage() }} dari
                            {{ $properties->lastPage() }})</div>
                        <div class="col-lg-6 text-center">
                            <div class="custom-pagination">
                                @for ($i = 1; $i <= $properties->lastPage(); $i++)
                                    <a href="{{ $properties->appends(['keyword' => isset($keyword) ? $keyword : ''])->url($i) }}"
                                        class="{{ $properties->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection
