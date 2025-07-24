<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
          <style> 
            .back-ground {
                background-color:white;
            }
            .card-body{
                background-color:rgb(63, 120, 225);
                box-shadow: 10px 10px rgb(18, 223, 255),
                        20px 20px rgb(0, 0, 0);
            }

          </style>
</head>
<body class="back-ground text-white col-sm-10 mx-auto ">
        <div class="container mt-5 ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="card mx-auto " style="max-width: 380px;">
                        <div class="card-body rounded border border-dark">
                            <h4 class="card-title mb-4 text-white">Create Student</h4>
                            <form action="/employees" method="post">
                            @csrf
                                <div class="form-group form-floating mb-3">
                                    <input class="form-control" name="first_name" id="first_name" placeholder="Enter student first name" type="text" >
                                    <label for="fname">Firstname</label>
                                </div>
                                <div class="form-group form-floating mb-3">
                                    <input class="form-control"  name="last_name" id="last_name" placeholder="Enter student last name" type="text">
                                    <label for="lname">Lastname</label>
                                </div>
                             
                                <div class="float-end ">
                                    <a href="/employees" class="btn btn-outline-success">Back</a>
                                    <input type="submit" class="btn btn-outline-light btn-block" value="Create"> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>