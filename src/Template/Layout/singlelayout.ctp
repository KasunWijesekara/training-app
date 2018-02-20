<!doctype html>
<html lang="en">
<head>
    <title><?=  h($title)?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

    <script src="/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/loader.js"></script>
    <script src="/js/holder.min.js"></script>
</head>
<body>
    <!-- Loader  -->
    <!-- <div id="loader">
        <div class="loader-container">
            <h3 class="loader-back-text">
                <img style="width: 235px;" src="img/logo.png" alt="" class="loader"></h3>
            </div>
        </div> -->
        <!-- Loader  -->    

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow nomarg">
          <img src="/img/logo.png" class="my-0 mr-md-auto img-responsive">
          <nav class="my-2 my-md-0 mr-md-3" id="navigation">
            <a class="p-2 text-dark" href="/">Home</a>
            <a class="p-2 text-dark" href="/about">About</a>
            <a class="p-2 text-dark" href="/programs">Programs</a>
            <a class="p-2 text-dark" href="/contact-us">Contact</a>
        </nav>
        <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
    </div>

    <?php echo $this->fetch('content'); ?>

    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img src="/img/footerlogo.png" height="150" class="mb-2 img-responsive">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

</body>
</html>