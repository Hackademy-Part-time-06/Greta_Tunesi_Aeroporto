<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/app.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">Airplane from Bugliano</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="">Homepage</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Details</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5 bg-image">
            <div class="container px-5">
                <div class="text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">
                        Fly with Bugliano city
                    </h1>
                </div>
            </div>
            <!-- tabella-->
            <div class="container p-3 mt-5 row">
                <div class="col-6">
                <table class="table table-dark table-hover"> 
                    <h1 class="bg-dark bg-gradient text-light p-3"> Partenze </h1>
                    <thead>
                        <tr>
                            <th scope="col">ID Volo</th>
                            <th scope="col">Compagnia</th>
                            <th scope="col">Città</th>
                            <th scope="col">Orario</th>
                            <th colspan="2" scope="col">Gate</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voli['departure'] as $flight)
                            <tr>
                                <td scope="row">{{ $flight['id'] }}</td>
                                <td scope="row">{{ $flight['company'] }}</td>
                                <td scope="row">{{ $flight['city'] }}</td>
                                <td scope="row">{{ $flight['time'] }}</td>
                                <td scope="row">{{ $flight['gate'] }}</td>
                                <td><i class="bi bi-info-circle-fill"></i></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                <div class="col-6">
                <table class="table table-dark table-hover">
                    <h1 class="bg-dark bg-gradient text-light p-3"> Arrivi </h1>
                    <thead>
                        <tr>
                            <th scope="col">ID Volo</th>
                            <th scope="col">Compagnia</th>
                            <th scope="col">Città</th>
                            <th scope="col">Orario</th>
                            <th colspan="2" scope="col">Gate</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voli['arrival'] as $flight)
                            <tr>
                                <td scope="row">{{ $flight['id'] }}</td>
                                <td scope="row">{{ $flight['company'] }}</td>
                                <td scope="row">{{ $flight['city'] }}</td>
                                <td scope="row">{{ $flight['time'] }}</td>
                                <td scope="row">{{ $flight['gate'] }}</td>
                                <td><i class="bi bi-info-circle-fill"></i></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>

            <!-- tabella-->
        </header>

    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
