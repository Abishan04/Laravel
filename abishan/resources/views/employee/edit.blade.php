<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .back-ground {
         
            background-color: black;

        }

        .card-body {
            background-color: black;
            box-shadow: 10px 10px rgb(248, 219, 71),
                        20px 20px rgb(255, 255, 255);
           
        }
        
    </style>
</head>

<body class="back-ground text-white col-sm-10 mx-auto ">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mx-auto " style="max-width: 380px;">
                    <div class="card-body rounded border border-light">
                        <h4 class="card-title mb-4 text-warning">Edit Student</h4>
                        <form action="/employees/{{ $employee->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-floating mb-3">
                                <input class="form-control" name="first_name" id="first_name"
                                    placeholder="Enter student first name" type="text"
                                    value="{{ $employee->first_name }}">
                                <label for="fname">Firstname</label>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input class="form-control" name="last_name" id="last_name"
                                    placeholder="Enter student last name" type="text"
                                    value="{{ $employee->last_name }}">
                                <label for="lname">Lastname</label>
                            </div>


                            <div class="float-end ">
                                <a href="/employees" class="btn btn-outline-warning">Back</a>
                                <input type="submit" class="btn btn-outline-warning btn-block" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>