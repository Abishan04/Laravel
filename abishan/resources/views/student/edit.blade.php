<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white text-white">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="bg-primary rounded p-4" action="/students/10" method="post">
                @csrf
                @method('PUT')
                <fieldset class="border p-4 rounded">
                    <legend class="fs-4 fw-bold text-center mb-4">Edit Details</legend>

                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter student first name" required>
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter student last name" required>
                    </div>

                    <input type="submit" value="Edit" class="btn btn-primary w-100 hover bg-dark text-white mt-3">
                    @method('delete')
                    <input type="submit" value="Delete" formaction="/students/10" method="post" class="btn btn-primary w-100 hover bg-danger text-white mt-3">
                </fieldset>
            </form>
        </div>
    </div>
</div>

</body>
</html>