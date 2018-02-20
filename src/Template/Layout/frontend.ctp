<!doctype html>
<html lang="en">
<head>
    <title><?=  h($title)?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/holder.min.js"></script>
</head>
<body>
    <!-- Loader  -->
    <!-- <div id="loader">
        <div class="loader-container">
            <h3 class="loader-back-text">
                <img style="width: 235px;" src="img/logo.png" alt="" class="loader">
            </h3>
            </div>
        </div> -->
        <!-- Loader  -->    

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow nomarg" id="mainnav">
          <img src="img/logo.png" class="my-0 mr-md-auto img-responsive">
          <nav class="my-2 my-md-0 mr-md-3" id="navigation">
            <a class="text-dark" href="/">Home</a>
            <a class="text-dark" href="/about">About</a>
            <a class="text-dark" href="/programs">Programs</a>
            <a class="text-dark" href="/contact-us">Contact</a>
        </nav>
        <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
    </div>

    <?php echo $this->fetch('content'); ?>

    

</body>
</html>