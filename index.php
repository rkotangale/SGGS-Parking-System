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
    <header id="topheader">
    <?php require './partials/_nav.php'?>
        <section id="hero" class="backimg">
            <!-- <div class="overlay"></div> -->
            <div class="container">
                <div class="container text-center text" data-aos="fade-up">
                    <h1>Welcome to Company name!</h1>
                    <p>Don't park your vechical on Road, It's so dengerous. Park your vechical in Company Name.</p>
                    <a href=""><span class="arrow"><i class="fas fa-angle-double-right"></i></span></a>
                </div>
            </div>
        </section>
    </header>

    <section id="about" class="u-black u-align-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-up" data-aos-delay="400">
                    <a href="#"><span class="icon"><i class="fas fa-map-marker-alt"></i></span></a>
                    <h2>Location</h2>
                    <p>A108 Adam Street, New York, NY 535022</p>
                </div>
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-up" data-aos-delay="500">
                    <a href="#"><span class="icon"><i class="fas fa-phone-volume"></i></span></a>
                    <h2>Call</h2>
                    <p>+1 5589 55488 55s <br>info@example.com</p>
                </div>
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-up" data-aos-delay="600">
                    <a href="#"><span class="icon"><i class="fas fa-lightbulb"></i></span></a>
                    <h2>For your future</h2>
                    <p>We protect investments and financial dreams.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="safe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="zoom-in">
                    <div class="image">
                        <img src="safe.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up">
                    <div class="safe">
                        <h1>Safe. <br> Relaxing. <br>Your car <br>in <span style="color: #f17c0e;">good <br>hand's.</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

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