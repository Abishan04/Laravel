@extends('layout.main')

@section('sidebar')
@parent
<li><a href="/home"></a></li>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to Home</h1>
            </div>
        </div>
    </div>
@endsection

@section('title','Home')