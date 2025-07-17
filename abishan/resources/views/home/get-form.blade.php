@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <head>
    <meta charset="UTF-8" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <link href="{{ asset('css/input.css') }}" rel="stylesheet">

</head>

<body class="py-5">
    <div class="container text-center">
        <h1 class="mb-5">Welcome to Home</h1>

        <div class="d-grid gap-3 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title mb-4">Choose HTTP Method</h5>

                    <form action="home" method="get">
                    
                        <input type="submit" value="GET Method" class="btn btn-outline-primary w-100 mb-2">
                    </form>

                    <form action="home" method="post">
                        @csrf
                        <input type="text" name="fname" id="fname" class="form-control mb-2">
                        <input type="text" name="lname" id="lname" class="form-control mb-2">
                        <input type="submit" value="POST Method" class="btn btn-primary w-100 mb-2">
                    </form>

                    <form action="home" method="post">
                        @csrf
                        @method('put')
                        <input type="submit" value="PUT Method" class="btn btn-warning w-100 mb-2">
                    </form>

                    <form action="home" method="post">
                        @csrf
                        @method('patch')
                        <input type="submit" value="PATCH Method" class="btn btn-info w-100 mb-2">
                    </form>

                    <form action="home" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="DELETE Method" class="btn btn-danger w-100">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
            </div>
        </div>
    </div>
@endsection