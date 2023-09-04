<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href={{ asset('dist/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{ asset('style.css')}}>
    <link rel="stylesheet" href={{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}>

    <title>Dribble Redesign</title>
</head>

<body>
    {{-- navbar --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Tanamanku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">tanaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact me</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link text-success gap-3">Login</a></li>
                    <li class="nav-item"><a href="" class="navlink btn btn-success rounded-pill">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- end navbar --}}

    {{-- jumbotron --}}
    <div class="jumbotron bgjumbo">
            <div class="container text-white">
                <div class="row">
                    <div class="col-md-1 h4 d-grid icons">
                        <a href="#">
                            <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin" style="color: #ffffff;"></i>
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                        </a>
                    </div>
                    <div class="col-md-11 text-center header">
                        <h1>Arjuna Garden Gallery</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio accusamus in officia odio porro alias quisquam, sunt voluptas, quia aliquam nam perspiciatis, numquam facere obcaecati.</p>
                        <input class="form-control mt-5" type="text" value="Search...." aria-label="readonly input example" readonly>
                        <span class="badge text-bg-secondary mt-3">Rekomendasi : </span>
                        <span class="badge text-bg-danger">Bonsai</span>
                        <span class="badge text-bg-warning">Anggrek</span>
                        <span class="badge text-bg-info">Mawar</span>
                    </div>
                </div>
            </div>
            </div>
    {{-- end jumbotron --}}

    <script src={{asset('dist/js/bootstrap.bundle.min.js')}}></script>
</body>

</html>
