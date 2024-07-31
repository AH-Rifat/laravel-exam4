<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Management Application By OSTAD</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ostad Exam 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">All Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create New Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="text-center my-5 text-decoration-underline">Contact Management Application</h3>

        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h5>All Contacts List</h5>
                    <div class="d-flex">
                        <form class="d-flex">
                            <select class="form-select form-select-sm me-2">
                                <option selected>Choose Sorting</option>
                                <option value="1">Name -Asc</option>
                                <option value="1">created_at -Asc</option>
                                <option value="2">Name -Desc</option>
                                <option value="2">created_at -Desc</option>
                            </select>
                            <button class="btn btn-sm btn-outline-success" type="submit">Apply</button>
                        </form>
                        <form class="d-flex ms-4">
                            <input class="form-control form-control-sm me-2" type="search" placeholder="Search"
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
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kamal</td>
                        <td>kamal@gmail.com</td>
                        <td>01652413644</td>
                        <td>jj kkljj kljkja</td>
                        <td>23-3-2024</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-info">View</button>
                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kamal</td>
                        <td>kamal@gmail.com</td>
                        <td>01652413644</td>
                        <td>jj kkljj kljkja</td>
                        <td>23-3-2024</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-info">View</button>
                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
</body>

</html>
