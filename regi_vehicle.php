<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <header id="topheader">
        <?php require './partials/_nav.php' ?>
    </header>
    <section id="form">
        <div class="container">
            <form align="center" action="function.php" method="POST" data-aos="zoom-in">
                <div class="form-group">
                    <input type="text" name="name" class="form-control text-white" placeholder="Enter Name..">
                </div>
                <div class="form-group">
                    <input type="text" name="vname" class="form-control text-white" placeholder="Vechical Name..">
                </div>
                <div class="form-group">
                    <input type="text" name="vnumber" class="form-control text-white" placeholder="Vechical Number..">
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input onfocus="(this.type='date')" name="entry" class="form-control" placeholder="Entry Date" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <input onfocus="(this.type='date')" name="exit" class="form-control" placeholder="Exit Date" required="">
                    </div>
                </div>
                <input type="submit" name="submit">
            </form><br>

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