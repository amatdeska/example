<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>
        My Website
    </title>
    <!-- Boostrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- Font Awesome 4.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Nav  -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-background">
        <img src="{{asset('img/user1.jpg')}}" class="icon">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        Login</a>
                </li>
                <!-- <li class="nav-item active">
                    <a class="nav-link">/</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Register</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Nav End -->

    <!-- Corousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="content-line">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/pexels-aleksandar-pasaric-325185.jpg') }}" alt="#">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/pexels-carlos-oliva-3586966.jpg') }}" alt="#">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/pexels-roberto-nickson-2478248.jpg') }}" alt="#">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Corousel End -->

    <!-- Content -->
    <div class="container container1">
        <div class="row">
            <div class="col-sm-4 content-line" data-aos="zoom-out-up" data-aos-duration="1000">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 content-line" data-aos="zoom-out-up" data-aos-duration="1000">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 content-line" data-aos="zoom-out-up" data-aos-duration="1000">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Go
                            somewhere</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('img/user1.jpg') }}" alt="#" class="img-radius">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Text -->
    <div class="container">
        <h1 class="content-line title-text">Example Text</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/user1.jpg') }}" class="img-radius1" data-aos="zoom-out-right"
                    data-aos-duration="1000">
            </div>
            <div class="col-md-6">
                <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    <!-- Feature -->
    <div class="container">
        <h1 class="content-line title-text">Feature</h1>
        <div class="row">
            <div class="col-md-6">
                <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/user1.jpg') }}" class="img-radius1" data-aos="zoom-out-left"
                    data-aos-duration="1000">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class"container1">
                <div class="row">
                    <div class="col-sm-4 content-text">
                        <p class="footer-text">About</p>
                        <p class="footer-text">The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                            below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                            Malorum" by Cicero are also reproduced in their exact original form, accompanied by English
                            versions from the 1914 translation by H. Rackham.</p>
                    </div>
                    <div class="col-sm-4 content-text">
                        <p class="footer-text">Address</p>
                        <p class="footer-text"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    Jl. Karang Tengah, Tangerang Banten
                    </p>
                    <p class="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    Indonesia
                    </p>
                    <p class="footer-text"><i class="fa fa-compass" aria-hidden="true"></i>
                Code Pos 15157
                </p>
                <a href="mailto:amatdeska97@gmail.com" class="footer-text-email"><i class="fa fa-envelope" aria-hidden="true"></i>
            amatdeska97@gmail.com
            </a>
                    </div>
                    <div class="col-sm-4 content-text">
                        <p class="footer-text">Message</p>
                        <form>
                            <div class="row">
                                <div class="col input-footer">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col input-footer">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 input-footer">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-12 input-footer">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-footer">
                                    <button type="button" class="btn btn-primary">Send</button> </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12">
                        <p class="company">Amat Deska Arya &copy; 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Content End -->
    <!-- <hr class="hr"> -->

    <!-- Modal JS -->
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })

    </script>
    <script>
        AOS.init();

    </script>
</body>

</html>
