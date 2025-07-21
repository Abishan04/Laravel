@extends('layout.dashboard')

@section('elist', 'active')

@section('title','Employee List')

@section('content')
<div class="container py-5">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle text-center bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Phone No</th>
                    <th>NIC No</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="{{ asset('images/abishan.png') }}" alt="Abishan" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                    <td>Abi</td>
                    <td>20</td>
                    <td>Male</td>
                    <td>0704567890</td>
                    <td>200518600093</td>
                    <td><a href="/employeedetail/1/Abishan/0704567890/200518600093" class="btn btn-sm btn-primary">Show</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="{{ asset('images/mathi.png') }}" alt="Mathi" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                    <td>Mathi</td>
                    <td>24</td>
                    <td>Male</td>
                    <td>0774567890</td>
                    <td>200115600569</td>
                    <td><a href="/employeedetail/2/Mathivarman/0774567890/200115700569" class="btn btn-sm btn-primary">Show</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="{{ asset('images/janan.png') }}" alt="Janan" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                    <td>Janan</td>
                    <td>25</td>
                    <td>Male</td>
                    <td>0784567890</td>
                    <td>200003301029</td>
                    <td><a href="/employeedetail/3/Jananthan/0784567890/200003301029" class="btn btn-sm btn-primary">Show</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="{{ asset('images/habin.png') }}" alt="Habin" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                    <td>Habin</td>
                    <td>21</td>
                    <td>Male</td>
                    <td>0754567890</td>
                    <td>200436200300</td>
                    <td><a href="/employeedetail/4/Habinan/0754567890/200436200300" class="btn btn-sm btn-primary">Show</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection