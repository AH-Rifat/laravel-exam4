@extends('layout')
@section('content')
    <div class="card w-50">
        <div class="card-body">
            <h5 class="card-title">Contact Details</h5>
            <hr>
            <p class="card-text"><strong>ID: </strong> {{ $contact->id }}</p>
            <p class="card-text"><strong>Name: </strong> {{ $contact->name }}</p>
            <p class="card-text"><strong>Email: </strong> {{ $contact->email }}</p>
            <p class="card-text"><strong>Phone: </strong>{{ $contact->phone }}</p>
            <p class="card-text"><strong>Address: </strong>{{ $contact->address }}</p>
            <p class="card-text"><strong>Created at: </strong>{{ $contact->created_at->format('d-m-Y') }}</p>
            <p class="card-text"><strong>Updated at: </strong>{{ $contact->updated_at->format('d-m-Y') }}</p>
            <a href="{{ route('/') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
