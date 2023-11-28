<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MedEase Dashboard</title>

    <!-- External Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="manifest" href="site.webmanifest" />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- Internal Styles -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MedEase Dashboard</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-primary border-0">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/dashboard">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/dashboardP">
                                <span data-feather="user"></span>
                                Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artikeldashboard">
                                <span data-feather="book"></span>
                                Artikel
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

<body>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 40px">
    <div class="container">
        <div class="row justify-content-center">
    <div class="container align-items-center justify-content-center ">
        <div class="card">
                    <div class="card-header">Edit Pasien</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pasiens.update', $pasien->id) }}">
                            @csrf
                            @method('PUT')

                            
                        <div class="form-group">
                            <label for="poliklinik">Poliklinik:</label>
                            <input type="text" name="poliklinik" id="poliklinik" class="form-control" value="{{ $pasien->poliklinik }}" required>
                        </div>

                        <div class="form-group" style="margin-top: 20px">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $pasien->tanggal }}" required>
                        </div>
                            <div class="form-group" style="margin-top: 20px">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </main>

    </div>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

