<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $details['name'] }}'s Details</title>
    <style>
        body {
            background: linear-gradient(135deg, #2d3a5a, #3c4e6d);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header,
        footer {
            background: #3a4d7a;
            padding: 24px;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 2px;
        }

        main {
            display: flex;
            flex: 1;
        }

        aside {
            background: #4a649e;
            width: 20%;
            padding: 20px;
            text-align: center;
            font-size: 1.1rem;
        }

        section {
            background: #3c4e6d;
            width: 80%;
            padding: 20px;
        }

        .details-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 32px;
            flex-wrap: wrap;
        }

        .details-table {
            background: #fff;
            color: #3a4d7a;
            width: 100%;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            font-size: 1.1rem;
            border-collapse: collapse;
        }

        .details-table th,
        .details-table td {
            padding: 10px 18px;
            border: 1px solid #e0e7ef;
        }

        .details-table th {
            background: #4a649e;
            color: #fff;
        }

        .go-back,
        .print-btn {
            display: inline-block;
            margin: 24px 12px 0;
            text-align: center;
            font-size: 1.1rem;
            color: #42a5f5;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }

        .go-back:hover,
        .print-btn:hover {
            color: #1976d2;
            text-decoration: underline;
        }

        h1 {
            margin-top: 0;
        }

        hr {
            border: none;
            border-top: 2px solid #42a5f5;
            margin-bottom: 24px;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }

            aside,
            section {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>{{ $details['name'] }}</header>

        <main>
            <aside>
                <p>Sidebar</p>
                <p>Navigation</p>
            </aside>

            <section>
                <div class="details-container">
                    <table class="details-table">
                        <tr>
                            <td rowspan="8" style="width: 200px; padding: 0;">
                                <div
                                    style="display: flex; justify-content: center; align-items: center; height: 150px;">
                                    <img src="{{ asset('images/' . $details['name'] . '.png') }}"
                                        onerror="this.onerror=null;this.src='{{ asset('images/default.png') }}';"
                                        alt="{{ $details['name'] }}"
                                        style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $details['id'] }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $details['name'] }}</td>
                        </tr>
@php
    use Illuminate\Support\Str;
    use Carbon\Carbon;

    $prefix = Str::substr($details['phone_no'], 0, 3);
    $nic = strtoupper(trim($details['nic']));
    $dob = $age = $gender = null;

    // Extract year and day from NIC
    if (Str::length($nic) === 10 && Str::endsWith($nic, ['V', 'X'])) {
        $year = 1900 + intval(Str::substr($nic, 0, 2));
        $day = intval(Str::substr($nic, 2, 3));
    } elseif (Str::length($nic) === 12 && ctype_digit($nic)) {
        $year = intval(Str::substr($nic, 0, 4));
        $day = intval(Str::substr($nic, 4, 3));
    }

 // Parse gender and calculate DOB
if (isset($year, $day)) {
    $gender = $day > 500 ? 'Female' : 'Male';
    $day = $day > 500 ? $day - 500 : $day;

    $isLeap = Carbon::createFromDate($year)->isLeapYear();
    $dayOffset = $day - ($isLeap ? 1 : 2); // Adjust for leap/non-leap year

    if ($dayOffset >= 0 && $dayOffset < ($isLeap ? 366 : 365)) {
        $dobObj = Carbon::createFromDate($year, 1, 1)->addDays($dayOffset);
        $dob = $dobObj->format('Y-m-d');
        $age = $dobObj->age;
    } else {
        $dob = $age = $gender = null;
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
                            <tr>
                                <th>NIC</th>
                                <td>{{ $details['nic'] }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $dob ?? 'Unavailable' }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $gender ?? 'Unknown' }}</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>{{ $age ?? 'Unavailable' }}</td>
                            </tr>
                    </table>
                </div>

                <a href="/" class="go-back">Go back</a>
                <a href="javascript:window.print()" class="print-btn">Print</a>
            </section>
        </main>

        <footer>&copy; 2025 Employee System. All rights reserved.</footer>
    </div>
</body>

</html>