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
            <div class="card-title d-flex justify-content-between">
                <h5>All Contacts List</h5>
                <div class="d-flex">
                    <form action="{{ route('/') }}" method="GET" class="d-flex">
                        <select name="sort" class="form-select form-select-sm me-2">
                            <option selected>Choose Sorting</option>
                            <option value="name-ase">Name -Asc</option>
                            <option value="created_at-ase">created_at -Asc</option>
                            <option value="name-desc">Name -Desc</option>
                            <option value="created_at-desc">created_at -Desc</option>
                        </select>
                        <button class="btn btn-sm btn-outline-success" type="submit">Apply</button>
                    </form>
                    <form method="GET" action={{ route('/') }} class="d-flex ms-4">
                        <input class="form-control form-control-sm me-2" type="search" name="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-sm btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <table class="table table-striped mt-3 text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->created_at->format('d-m-Y') }}</td>
                        <td class="d-flex justify-content-center gap-1">
                            <a type="button" href={{ route('/show', $contact->id) }} class="btn btn-sm btn-info">View</a>
                            <a type="button" href={{ route('/edit', $contact->id) }}
                                class="btn btn-sm btn-success">Edit</a>
                            <form action={{ route('/destroy', $contact->id) }} method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
