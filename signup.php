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

            <a class="navbar-brand" href="./index.php"><img class="logo" src="./img/logo.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12" data-aos="fade-right">
                    <img class="reg_img" src="./img/regi.svg" alt="" height="300px">
                </div>
                <div class="col-lg-6 col-md-12 mt-3" data-aos="fade-left">
                    <form align="center" action="reg_function.php" method="POST">

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-12">
                                <input type="text" name="firstname" class="form-control text-black" placeholder="Enter First Name..">
                            </div>
                            <div class="form-group col-lg-6 col-md-12">
                                <input type="text" name="lastname" class="form-control text-black" placeholder="Enter Last Name..">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control text-black" placeholder="Enter email..">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control text-black" placeholder="Enter Password..">
                        </div>

                        <div class="form-group">
                            <input type="password" name="cpassword" class="form-control text-black" placeholder="Enter Confirm Password..">
                        </div>

                        <input class="submit_btn" type="submit" name="register" value="Register">
                    </form>
                </div>
            </div>

        </div>
    </section>


    <!------footer----->
    <div id="footer">
        <h5>Developed By</h5>
        <h5>Rajat Kotangale, Sanskruti Sawalkar & Snehal Deshpande</h5>
        <p>@2021-2022</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>
</body>

</html>