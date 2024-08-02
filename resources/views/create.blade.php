@extends('layout')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Contact Form</h5>
            <hr>
            <form action={{ route('/store') }} method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control form-control-sm @error('name') is-invalid @enderror" id="username">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control form-control-sm @error('email') is-invalid @enderror" id="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" name="phone" value="{{ old('phone') }}"
                            class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-lg-12">
                        <label for="addressInput" class="form-label">Address</label>
                        <textarea name="address" class="form-control form-control-sm @error('address') is-invalid @enderror" id="addressInput"
                            rows="3"></textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Create New Contact</button>
                </div>
            </form>
        </div>
    </div>
@endsection
