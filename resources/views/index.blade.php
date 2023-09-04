<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href={{ asset('bootstrap-5.2.3/dist/css/bootstrap.min.css')}}>

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OTNG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h1>Butuh otangan?</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
          </div>
        <div class="alert alert-info" role="alert">
            otang di sini semuanya pasti mudah 100%
        </div>
        <button class="btn btn-outline-danger">ngenjem kadek</button>
        <button class="btn btn-outline-success">mejer kadek</button>

        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h3>pinjaman Ojol 50jt</h3>
                        <p>cicilan 10%</p>
                        <button class="btn btn-primary">pinjam</button>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h3>pinjaman Ojol 1T</h3>
                        <p>cicilan 80%</p>
                        <button class="btn btn-primary">pinjam</button>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                      <h3>Pinjaman Ojol 500jt</h3>
                      <p>cicilan 20%</p>
                      <button class="btn btn-primary">Pinjam</button>
                    </div>
                  </div>
            </div>
        </div>

    </div>
</body>

</html>
