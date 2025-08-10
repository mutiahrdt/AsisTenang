<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar, .footer {
            background-color: #6AC3E9;
        }
        .navbar img {
            height: 40px;
        }
        .footer {
            height: 20px;
        }
        .search-bar {
            border-radius: 20px;
            background-color: white;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 200px;
            background-color: #343a40;
            padding-top: 60px;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #575d63;
        }
        .content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/AsisTenangHorizontal.png') }}" alt="Logo">
        </a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 search-bar" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <div class="sidebar">
        <a href="{{ route('home') }}">
            <i class="fas fa-home"></i> Home
        </a>
        <a href="{{ route('pekerja.list') }}">
            <i class="fas fa-database"></i> Data Pekerja
        </a>
        <a href="{{ route('order.request') }}">
            <i class="fas fa-file-alt"></i> Permintaan
        </a>
        <a href="{{ route('profile') }}">
            <i class="fas fa-user"></i> Profile
        </a>
    </div>

    <div class="content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <h2>Pekerja Pada Bulan Januari</h2>
                    <canvas id="jobChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted"></span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('jobChart').getContext('2d');
        const jobChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bersih-Bersih', 'Setrika', 'Memasak', 'Sopir', 'Perawatan', 'Tukang Kebun'],
                datasets: [{
                    label: 'Jumlah Pekerja',
                    data: [20, 15, 30, 25, 10, 12],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
