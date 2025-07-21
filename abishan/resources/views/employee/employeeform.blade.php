@extends('layout.dashboard')

@section('eform', 'active')

@section('title', 'Employee Form')

@section('style')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')

<form action="/employeedetail" method="POST">
    @csrf
    <fieldset> 
        <legend>Employee Form</legend>

        <label for="empid">Employee ID</label>
        <input type="text" name="empid" id="empid" required>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="nic">NIC</label>
        <input type="text" name="nic" id="nic" required>

        <label for="tel">Telephone</label>
        <input type="tel" name="tel" id="tel" required>

        <input type="submit" value="Submit">
    </fieldset>
</form>
@endsection