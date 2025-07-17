<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> @yield('title')</title>
    
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            height: 100vh;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .header {
            height: 60px;
            padding: 10px;
            background-color: #3c4e6d;
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .sidebar {
            background-color: #4a649e;
            color: #fff;
            width: 25%;
        }

        .nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav li {
            margin-bottom: 10px;
        }

        .nav a {
            color: #fff;
            text-decoration: none;
        }

        .content {
            background-color: #eef3f9;
            color: #333;
            width: 75%;
        }

        .footer {
            height: 50px;
            padding: 8px;
            background-color: #3c4e6d;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td colspan="2" class="header">Header</td>
        </tr>
        <tr>
            <td class="sidebar">
                <div class="nav">
                    @section('sidebar')
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/photo">Photos</a></li>
                        <li><a href="/emplist">Employees</a></li>
                    </ul>
                    @show
                </div>
            </td>
            <td class="content">@yield('content')</td>
        </tr>
        <tr>
            <td colspan="2" class="footer">Footer</td>
        </tr>
    </table>
</body>

</html>