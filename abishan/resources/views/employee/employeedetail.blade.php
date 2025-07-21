@extends('layout.main')

@section('title', $details['name'] . "'s Details")

@section('style')
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')

<div class="wrapper w-100 h-100">
        <section class="flex-grow-1 p-4 bg-light text-dark">
            <div class="details-container">
                <table class="details-table table table-bordered">
                    <tr>
                        <td rowspan="8" style="width: 200px; padding: 0;">
                            <div class="d-flex justify-content-center align-items-center" style="height: 150px;">
                                <img src="{{ asset('images/' . $details['name'] . '.png') }}"
                                     onerror="this.onerror=null;this.src='{{ asset('images/default.png') }}';"
                                     alt="{{ $details['name'] }}"
                                     style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                            </div>
                        </td>
                    </tr>
                    <tr><th>ID</th><td>{{ $details['id'] }}</td></tr>
                    <tr><th>Name</th><td>{{ $details['name'] }}</td></tr>

                    @php
                        use Illuminate\Support\Str;
                        use Carbon\Carbon;

                        $prefix = Str::substr($details['phone_no'], 0, 3);
                        $nic = strtoupper(trim($details['nic']));
                        $dob = $age = $gender = null;

                        if (Str::length($nic) === 10 && Str::endsWith($nic, ['V', 'X'])) {
                            $year = 1900 + intval(Str::substr($nic, 0, 2));
                            $day = intval(Str::substr($nic, 2, 3));
                        } elseif (Str::length($nic) === 12 && ctype_digit($nic)) {
                            $year = intval(Str::substr($nic, 0, 4));
                            $day = intval(Str::substr($nic, 4, 3));
                        }

                        if (isset($year, $day)) {
                            $gender = $day > 500 ? 'Female' : 'Male';
                            $day = $day > 500 ? $day - 500 : $day;

                            $isLeap = Carbon::createFromDate($year)->isLeapYear();
                            $dayOffset = $day - ($isLeap ? 1 : 2);

                            if ($dayOffset >= 0 && $dayOffset < ($isLeap ? 366 : 365)) {
                                $dobObj = Carbon::createFromDate($year, 1, 1)->addDays($dayOffset);
                                $dob = $dobObj->format('Y-m-d');
                                $age = $dobObj->age;
                            }
                        }
                    @endphp

                    <tr>
                        <th>Phone No</th>
                        <td>
                            @switch($prefix)
                                @case('070') {{ $details['phone_no'] . ' - Mobitel' }} @break
                                @case('077') {{ $details['phone_no'] . ' - Dialog' }} @break
                                @case('078') {{ $details['phone_no'] . ' - Hutch' }} @break
                                @case('075') {{ $details['phone_no'] . ' - Airtel' }} @break
                                @default I don't have any records!
                            @endswitch
                        </td>
                    </tr>
                    <tr><th>NIC</th><td>{{ $details['nic'] }}</td></tr>
                    <tr><th>Date of Birth</th><td>{{ $dob ?? 'Unavailable' }}</td></tr>
                    <tr><th>Gender</th><td>{{ $gender ?? 'Unknown' }}</td></tr>
                    <tr><th>Age</th><td>{{ $age ?? 'Unavailable' }}</td></tr>
                </table>
            </div>

            <div class="mt-3">
                <a href="/form" class="btn btn-secondary me-2">Go back</a>
            </div>
        </section>
    </main>

    <footer class="text-center mt-4">&copy; 2025 Employee System. All rights reserved.</footer>
</div>
@endsection