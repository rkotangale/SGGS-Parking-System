<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking System</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-primary">

            <a class="navbar-brand" href="#"><img class="logo" src="./img/logo.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./signup.php">SIGNUP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">LOGOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./regi_vehicle.php">REGISTER VEHICLE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./vehicle_details.php">VEHICLE DETAILS</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

    <!--------HEADER CODE--------->
    <div id="header">
        <div class="container text-center">
            <div class="user-box">
                <img class="center_image" src="./img/park-1.png">
                <h1>WELCOME TO SGGS PARKING SYSTEM</h1>
                <p>B.Tech,CSE</p>
            </div>
        </div>
    </div>

    <section id="about" class="u-black u-align-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-right" data-aos-delay="400">
                    <a href="#"><span class="icon"><i class="fas fa-map-marker-alt"></i></span></a>
                    <h2>Location</h2>
                    <p>SGGSEI&T, VISHNUPURI, NANDED, 431606</p>
                </div>
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-down" data-aos-delay="500">
                    <a href="#"><span class="icon"><i class="fas fa-phone-volume"></i></span></a>
                    <h2>Call</h2>
                    <p>+1 5589 55488 55s <br>info@example.com</p>
                </div>
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-left" data-aos-delay="600">
                    <a href="#"><span class="icon"><i class="fas fa-lightbulb"></i></span></a>
                    <h2>For your future</h2>
                    <p>We protect investments and financial dreams.</p>
                </div>
            </div>

        </div>
    </section>

    <!-----------connect------------>
    <div id="contact">
        <div class="container-fluid paddind">
            <div class="row text-center padding">
                <div class="col-12">
                    <h1 style="margin-top: 30px;">CONTACT</h1>
                </div>
                <div class="col-12 social padding">
                    <a class="bttn" href="https://www.linkedin.com/in/rajatkotangale"><i class="fa fa-linkedin"></i></a>
                    <a class="bttn" href="mailto:rajatkotangale.13@gmail.com"><i class="fa fa-google"></i></a>
                    <a class="bttn" href="https://www.facebook.com/profile.php?id=100010364774076"><i
                            class="fa fa-facebook"></i></a>
                    <a class="bttn" href="https://instagram.com/_r_kotangale_?igshid=1fjl8lcgw14td"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!------footer----->
    <div id="footer">
        <h5>Developed By</h5>
        <h5>Rajat Kotangale, Sanskruti Sawalkar & Snehal Deshpande</h5>
        <p>@2021-2022</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>

</body>

</html>