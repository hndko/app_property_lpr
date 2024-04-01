@extends('frontend.templates.app')
@section('content')
    <main>
        <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/images/hero_bg_1.jpg') }}')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Agen Kami</h1>

                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Agen Kami
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-6 mb-5">
                        <h2 class="font-weight-bold heading text-primary mb-4">
                            Agen Kami
                        </h2>
                        <p class="text-black-50">
                            Temui agen-agen handal kami yang siap membantu Anda dalam menemukan properti impian.
                        </p>
                    </div>
                </div>
                <div class="row">
                    @if ($result->isEmpty())
                        <div class="col-12 text-center">
                            <p>Tidak ada data agen yang tersedia.</p>
                        </div>
                    @else
                        @foreach ($result as $agent)
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
                                <div class="h-100 person">
                                    <img src="{{ asset('storage/images/foto_sampul/' . $agent->foto_sampul) }}"
                                        alt="Image" class="img-fluid" />
                                    <div class="person-contents">
                                        <h2 class="mb-0"><a href="#">{{ $agent->nama_lengkap }}</a></h2>
                                        <span class="meta d-block mb-3">Agen Properti</span>
                                        <ul class="social list-unstyled list-inline dark-hover">
                                            <li class="list-inline-item"><a href="#"><span
                                                        class="icon-twitter"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span
                                                        class="icon-facebook"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span
                                                        class="icon-linkedin"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span
                                                        class="icon-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
