<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .back-ground {
            background-color: #000000ff;
        }
    </style>
</head>
<body class="back-ground">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="bg-primary rounded p-4" action="/students" method="post">
                @csrf                
                <fieldset class="border p-4 rounded">
                    <legend class="fs-4 fw-bold text-center mb-4">Create Student</legend>

                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter student first name" required>
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter student last name" required>
                    </div>

                    <input type="submit" class="btn btn-primary w-100 hover bg-dark text-white mt-3">
                </fieldset>
            </form>
        </div>
    </div>
</div>

</body>
</html>