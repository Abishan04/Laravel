@extends('layout.dashboard')

@section('title', 'Sample')

@section('content')
<div class="container mt-5 ">
    <div class="row ">
        <div class="col-md-12 ">
            <div class="card mx-auto " style="max-width: 380px;">
                <div class="card-body rounded bg-light">
                    <h4 class="card-title mb-4 text-dark">Create Student</h4>
                    <form action="/employees" method="post">
                        @csrf
                        <div class="form-group form-floating mb-3 ">
                            <input class="form-control" name="first_name" id="first_name"
                                placeholder="Enter student first name" type="text">
                            <label for="fname">Firstname</label>
                        </div>

                        <div class="form-group form-floating mb-3 ">
                            <input class="form-control" name="last_name" id="last_name"
                                placeholder="Enter student last name" type="text">
                            <label for="lname">Lastname</label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-outline-dark w-100" value="Create"
                                style="max-width: 500px;">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection