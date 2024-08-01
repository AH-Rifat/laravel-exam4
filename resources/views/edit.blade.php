@extends('layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Contact Form</h5>
            <hr>
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control form-control-sm" id="username">
                    </div>
                    <div class="col-lg-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-sm" id="email">
                    </div>
                    <div class="col-lg-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control form-control-sm" id="phone">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-lg-12">
                        <label for="addressInput" class="form-label">Address</label>
                        <textarea class="form-control form-control-sm" id="addressInput" rows="3"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="button">Update Contact</button>
                </div>
            </form>
        </div>
    </div>
@endsection
