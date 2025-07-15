<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Employee Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <form action="/employeedetail" method="post">
        <fieldset>
            <legend>Employee Form</legend>
            @csrf
            <label for="empid">Employee ID</label>
            <input type="text" name="empid" id="empid">

            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="nic">NIC</label>
            <input type="text" name="nic" id="nic">

            <label for="tel">Telephone</label>
            <input type="tel" name="tel" id="tel">

            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>