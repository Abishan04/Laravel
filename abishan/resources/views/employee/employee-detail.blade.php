<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abishan's Details</title>
    <link rel="stylesheet" href="../css/style.css">
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

        header, footer {
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
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            font-size: 1.1rem;
            border-collapse: collapse;
        }

        .details-table th, .details-table td {
            padding: 10px 18px;
            border: 1px solid #e0e7ef;
        }

        .details-table th {
            background: #4a649e;
            color: #fff;
        }

        .go-back {
            display: block;
            margin: 24px auto 0;
            text-align: center;
            font-size: 1.1rem;
            color: #42a5f5;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }

        .go-back:hover {
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
            aside, section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header>Abishan</header>

        <main>
            <aside> 
  sidebar
            </aside>

            <section>
                <div class="details-container">
                    <table class="details-table">
                        <tr><th>ID</th><td>{{ $id}}</td></tr>
                        <tr><th>Name</th><td>{{ $name }}</td></tr>
                       
                            @php
                                
                                use Illuminate\Support\Str;                 
                                $prefix = Str::substr($phone_no  , 0, 3);
                            @endphp
                       
                      

                    
                        <tr>
                            <th>Phone No</th>
                            <td>
                            @if($prefix == '070')
                                {{ $phone_no . ' - mobitel' }}
                            @elseif($prefix == '077')
                                {{ $phone_no. ' - dialog' }}
                            @elseif($prefix == '078')
                                {{ $phone_no. ' - hutch' }}
                            @elseif($prefix == '075')
                                {{ $phone_no. ' - airtel' }}
                            @else
                                I don't have any records!
                            @endif

                            </td>
                        </tr>
                @php
                    use Carbon\Carbon;

                    $nic = strtoupper(trim( $nic));
                    $dob = null;
                    $age = null;
                    $gender = null;

                    if (Str::length( $nic) === 10 && (Str::endsWith($nic, 'V') || Str::endsWith( $nic , 'X'))) {
                        $year = 1900 + intval(Str::substr($nic, 0, 2));
                        $day = intval(Str::substr($nic , 2, 3));
                    } elseif (Str::length( $nic) === 12 && ctype_digit( $nic)) {
                        $year = intval(Str::substr($nic, 0, 4));
                        $day = intval(Str::substr($nic, 4, 3));
                    }

                    if ($year && $day) {
                        $gender = $day > 500 ? 'Female' : 'Male';
                        if ($day > 500) {
                            $day -= 500;
                        }

                        try {
                            $isLeap = Carbon::createFromDate($year)->isLeapYear();

                            if ($day >= 1 && $day <= ($isLeap ? 366 : 365)) {
                                $dobObj = Carbon::createFromDate($year, 1, 1)->addDays($day - 1);
                                $dob = $dobObj->format('Y-m-d');
                                $age = $dobObj->age;
                            } else {
                                $dob = null;
                                $age = null;
                                $gender = null;
                            }
                        } catch (Exception $e) {
                            $dob = null;
                            $age = null;
                            $gender = null;
                        }
                    }
                @endphp
                       <tr><th>NIC</th><td>{{ $nic }}</td></tr>
                        <tr><th>Date of Birth</th><td>{{ $dob ?? 'Unavailable' }}</td></tr>
                        <tr><th>Gender</th><td>{{ $gender ?? 'Unknown' }}</td></tr>
                        <tr><th>Age</th><td>{{ $age ?? 'Unavailable' }}</td></tr>

                    </table>
                </div>
                <a href="/" class="go-back">Go back</a>
            </section>
        </main>

        <footer>&copy; 2025 Employee System. All rights reserved.</footer>
    </div>
</body>
</html>
