<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-primary text-white col-sm-10 mx-auto">
    <h1 class="text-center">Employee List</h1>
    <table class="table table-striped table-hover table-bordered table-dark text-center">
        <thead class="table-light"> 
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td><a href="employees/{{ $employee->id }}" class="btn btn-outline-success">show</a></td>
                    <td><a href="employees/{{ $employee->id }}/edit" class="btn btn-outline-warning">edit</a></td>
                    <form action="employees/{{ $employee->id }}" method="post">
                        @csrf
                        @method('delete')
                        <td> <button type="submit" class="btn btn-outline-danger">delete </button></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>