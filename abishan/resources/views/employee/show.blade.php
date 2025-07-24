<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        
    </style>
</head>
<body class="bg-success text-white col-sm-10 mx-auto">
    <h1 class="text-center">{{ $employee->first_name }} Information</h1>
   <table class="table table-hover table-bordered table-dark border-white">
        <tbody > 
            <tr>
                <th >ID</th>
                <td >{{ $employee->id }}</td>
             
            </tr>
            <tr>
                <th>First Name</th>
                <td>{{ $employee->first_name }}</td>
             
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{ $employee->last_name }}</td>
              
            </tr>
        
        </tbody>
    </table>
    <div class="text-center">
    <a href="/employees" class="btn btn-primary">Back</a>
    </div>
</body>
</html>