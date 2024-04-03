@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row align-items-center">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    Selamat datang kembali {{ auth()->user()->name }}! 🎉
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/images/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 order-3 order-md-2">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="d-block mb-1">Total Agent</span>
                                <h3 class="card-title text-nowrap mb-2">{{ $agentCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="d-block mb-1">Total Property</span>
                                <h3 class="card-title text-nowrap mb-2">{{ $propertyCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="d-block mb-1">Total Kontak Masuk</span>
                                <h3 class="card-title text-nowrap mb-2">{{ $contactCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="d-block mb-1">Total Ulasan</span>
                                <h3 class="card-title text-nowrap mb-2">{{ $ulasanCount }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
