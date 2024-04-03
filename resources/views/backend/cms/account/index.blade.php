@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <div class="card-body">
                        <form id="formAccountSettings" action="{{ route('account.update', auth()->user()->id) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ auth()->user()->name }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        value="{{ auth()->user()->email }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="text" id="password" name="password"
                                        placeholder="*********" value="{{ old('password') }}">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="text" class="form-control" id="new_password" name="new_password"
                                        placeholder="*********" value="{{ old('new_password') }}">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="updated_at">Terakhir Diperbaharui</label>
                                    <input type="text" id="updated_at" name="updated_at" class="form-control"
                                        value="{{ auth()->user()->updated_at }}" readonly>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
