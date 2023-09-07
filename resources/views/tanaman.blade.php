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

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top shadow-sm py-3 px-3">
        <div class="container">
            <a class="navbar-brand" href="#">ArjunaOutdoor</a>
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
                    <h1 class="typewrite text-white" data-period="2000"
                        data-type='[ "Hello,","Selamat Datang Di Arjuna Outdoor","Temukan kebutuhan Outdoormu disini." ]'>
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio accusamus in officia odio
                        porro alias quisquam, sunt voluptas, quia aliquam nam perspiciatis, numquam facere obcaecati.
                    </p>
                    <input class="form-control mt-5" type="text" value="Search...." aria-label="readonly input example"
                        readonly>
                    <span class="badge text-bg-secondary mt-3">Rekomendasi : </span>
                    <span class="badge text-bg-danger">tenda</span>
                    <span class="badge text-bg-warning">sleeping bag</span>
                    <span class="badge text-bg-info">carier</span>
                </div>
            </div>
        </div>
    </div>
    {{-- end jumbotron --}}

    {{-- card --}}
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card border-0 c1 shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 c2 shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 c3 shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end card --}}

    <!--  -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-5">
                <div class="card">
                    <div class="card-body">
                        <span class="badge text-bg-info mb-2">Sewa peralatan?</span>
                        <h2>anda mau ngedaki tpi? tapi bingung tidak punya alat.</h2>
                        <p>sewa sekarang peralatan kami! untuk kebutuhan outdoor anda, tidak perlu bingung kami tersedia
                            barang outdoor untuk disewa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="card">
                    <div class="card-body">
                        <span class="badge text-bg-warning mb-2">Beli peralatan</span>
                        <h2>anda bingung mau beli peralatan outdoor?</h2>
                        <p>ditempat kami tersedia peralatan outdoor siap untuk menemani outdoor anda, kualitas jangan di
                            ragukan
                            kami 100% original brand</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src={{ asset('dist/js/bootstrap.bundle.min.js')}}></script>
    <script>
        var TxtType = function (el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function () {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function () {
                that.tick();
            }, delta);
        };

        window.onload = function () {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>
</body>

</html>
