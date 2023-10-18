<?php require_once('../php/functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website portfolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

    <!-- Custom -->
    <link rel="stylesheet" href="/styles/_common.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/social.css">

    <!-- Policies -->
    <?php include('components/head_policies.html'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('../components/navbar.html'); ?>
    
    <div class="parallax" style="background-image: url(/res/server-bg.png)">
        <div class="container">
            <div class="content-tab">
                <h1>Websites</h1>
                <div class="row center">
                    <div class="col-lg links">
                        <div class="card">
                            <img class="card-img-top" src="2016-sito-brutto/antonio.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Sito brutto</h5>
                                <p class="card-text">Badly designed webpage, using only HTML and CSS (2016).</p>
                                <a href="2016-sito-brutto/" class="btn btn-primary">Open</a>
                            </div>
                        </div>
                    
                        <div class="card">
                            <img class="card-img-top" src="2019-chicken-chasers/res/chicken_kicking.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Chicken Chasers</h5>
                                <p class="card-text">Chicken-based website, developed as didactic exercise during my first year teaching Computer Science (2019).</p>
                                <a href="2019-chicken-chasers/" class="btn btn-primary">Open</a>
                            </div>
                        </div>
                    
                        <div class="card">
                            <img class="card-img-top" src="2022-web-tutorial/res/DSC_0653b-1024x1536.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Danicucina Web Tutorial</h5>
                                <p class="card-text">Websited based on recipes from <a href="https://blog.giallozafferano.it/danicucina/">Danicucina</a>, to teach website developement (2022).</p>
                                <a href="2022-web-tutorial/" class="btn btn-primary">Open</a>
                            </div>
                        </div>
                    

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator">
        <?php include('../components/ads_banner.html'); ?>
    </div>

    <?php include('../components/footer.html'); ?>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Custom -->
    <script src="/scripts/parallax.js"></script>
</body>
</html>