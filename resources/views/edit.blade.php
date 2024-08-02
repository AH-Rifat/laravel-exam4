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
            <h5 class="card-title">Edit Contact Form</h5>
            <hr>
            <form action={{ route('/update', $contact->id) }} method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-4">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" name="name" value={{ $contact->name }} class="form-control form-control-sm"
                            id="username">
                    </div>
                    <div class="col-lg-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value={{ $contact->email }}
                            class="form-control form-control-sm" id="email">
                    </div>
                    <div class="col-lg-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" name="phone" value={{ $contact->phone }}
                            class="form-control form-control-sm" id="phone">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-lg-12">
                        <label for="addressInput" class="form-label">Address</label>
                        <textarea name="address" class="form-control form-control-sm" id="addressInput" rows="3">{{ $contact->address }}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Update Contact</button>
                </div>
            </form>
        </div>
    </div>
@endsection
