<!DOCTYPE html>
<html>
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
<body id="loginpage">
        <?= $this->fetch('content') ?>
        <footer style="position: absolute;right: 0;bottom: 0;left: 0;padding: 1rem;color: #000000;text-align: center;">
                <div class="container">
                        <p style="font-size: 95%;text-align: center;">
                                &copy; <script>document.write(new Date().getFullYear())</script> LIT. All Rights Reserved. Designed and Developed by <a id="twc2" href="https://www.facebook.com/rasangi.dissanayake.5?ref=br_rs" target="_blank"> Rasangi Dissanayake</a>
                        </p>
                </div>
        </footer>                
</body>
</html>