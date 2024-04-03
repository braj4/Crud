<!doctype html>
<html lang="en">

<head>
    <title>Customer details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0px">
        <div class="container1" style="display: flex">
            <div class="container-fluid" style="background-color: #006994">
                <h2>Manage Employees</h2>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"> --}}
    {{-- <a class="nav-link active" aria-current="page" href="{{route('customer-view')}}">Home</a> --}}
    {{-- <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/view') }}">Customer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btn1">
            </div>
        </div>
    </nav> --}}
    <div class="container1" style="display: flex; justify-content:space-between; background-color: #006994 ">
        <div class="name" style="margin-left:   25px">
            <h2 style="color: white">Manage Employees</h2>
        </div>
        <div class="btn1" style="margin-top: 4px; margin-right: 25px">
            <a href="{{ url('/customer/view') }}">
                <button class="btn btn-danger">⛔ Delete</button>
            </a>
            <a href="{{ url('/register') }}">
                <button class="btn btn-success">⊕︀ Add New Employee</button>
            </a>
        </div>
    </div>
    {{-- <div class="container">
        <header class="d-flex flex-wrap justify-content-space-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Simple header</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div> --}}


    <table class="table">
        <thead style="text-align: center">
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
            @foreach ($customers as $customer)
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        {{-- <a href="{{route('customer-delete',['id'=>$customer->customer_id])}}">    By using the route method --}}
                        <a href="{{ route('customer-update', ['id' => $customer->customer_id]) }}">
                            <button class="badge badge-success">Update</button>
                        </a>
                        <a href="{{ url('/customer/delete') }}/{{ $customer->customer_id }}"> {{-- Last one is for taking the id --}}
                            <button class="badge badge-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div class="index" style="display:flex; text-align: center; justify-content:center"> --}}
    <div class="index" style="margin-left: 80%">
        {{ $customers->links() }}
    </div>
    {{-- <a href="{{ url('/register') }}">
        <button class="btn btn-primary" style="margin-left:1235px">Add</button>
    </a> --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
