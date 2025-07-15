<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Employee Details</title>
  <link rel="stylesheet" href="css/style.css" />
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

    .employee-table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      color: #3a4d7a;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.08);
      overflow: hidden;
    }

    .employee-table th, .employee-table td {
      padding: 10px 16px;
      border: 1px solid #e0e7ef;
      text-align: left;
    }

    .employee-table th {
      background: #4a649e;
      color: #fff;
    }

    .employee-table td {
      background: #fff;
    }

    .show-btn {
      background-color: #42a5f5;
      color: #fff;
      border: none;
      padding: 5px 10px;
      font-size: 0.9rem;
      font-weight: bold;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.2s;
    }

    .show-btn:hover {
      background-color: #1976d2;
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
    <header>Employee Details</header>
    <main>
      <aside>Sidebar</aside>
      <section>
        <table class="employee-table">
          <tr>
            <th>Id</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Phone No</th>
            <th>Nic no</th>
            
            <th>Show</th>
          </tr>
          <tr>
            <td>1</td>
            <td><img src="{{ asset('images/abishan.png') }}" alt="Abishan" style="width: 50px; height: 50px;"></td>
            <td>Abi</td>
            <td>20</td>
            <td>Male</td>
            <td>0704567890</td>
            <td>200518600093</td>
  
            
            <td><a href="/employeedetail/1/Abishan/0704567890/200518600093" class="show-btn">Show</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="{{ asset('images/mathi.png') }}" alt="Mathi" style="width: 50px; height: 50px;"></td>
            <td>Mathi</td>
            <td>24</td>
            <td>Male</td>
            <td>0774567890</td>
           
              <td>200115700569</td>
            <td><a href="/employeedetail/2/Mathivarman/0774567890/200115700569" class="show-btn">Show</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="{{ asset('images/janan.png') }}" alt="Janan" style="width: 50px; height: 50px;"></td>
            <td>Janan</td>
            <td>25</td>
            <td>Male</td>
            <td>0784567890</td>
            <td>200003301029</td>
            <td><a href="/employeedetail/3/Jananthan/0784567890/200003301029" class="show-btn">Show</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="{{ asset('images/habin.png') }}" alt="Habin" style="width: 50px; height: 50px;"></td>
            <td>Habin</td>
            <td>21</td>
            <td>Male</td>
            <td>0754567890</td>
            <td>200436200300</td>
            <td><a href="/employeedetail/4/Habinan/0754567890/200436200300" class="show-btn">Show</a></td>
          </tr>
        </table>
      </section>
    </main>
    <footer>&copy; 2025 Employee System. All rights reserved.</footer>
  </div>
</body>
</html>