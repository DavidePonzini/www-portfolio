<?php require_once('../php/functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website portfolio</title>

    <!-- Imports -->
    <?php include('../components/imports.html'); ?>

    <!-- Policies -->
    <?php include('components/head_policies.html'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('../components/navbar.html'); ?>
    
    <div class="parallax" style="background-image: url(/res/server-bg.png)">
        <div class="container-md container-dark">
            <h1>Websites</h1>
            <div class="row center">
                <div class="col-lg links">
                    <a href="2016-sito-brutto/" class="card">
                        <img class="card-img-top" src="2016-sito-brutto/antonio.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Sito brutto</h5>
                            <p class="card-text">Badly designed webpage, using only HTML and CSS (2016).</p>
                            <span class="btn btn-primary">Open</span>
                        </div>
                    </a>

                    <a href="2018-scenarios-from-the-future/" class="card">
                        <img class="card-img-top" src="2018-scenarios-from-the-future/res/chart-linechart.png">
                        <div class="card-body">
                            <h5 class="card-title">Scenarios from the Future</h5>
                            <p class="card-text">Visualization tools for complex data, developed as final project of Data Visualization course (2018).</p>
                            <span class="btn btn-primary">Open</span>
                        </div>
                    </a>
                
                    <a href="2019-chicken-chasers/" class="card">
                        <img class="card-img-top" src="2019-chicken-chasers/res/chicken_kicking.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Chasers</h5>
                            <p class="card-text">Chicken-based website, developed as didactic exercise during my first year teaching Computer Science (2019).</p>
                            <span class="btn btn-primary">Open</span>
                        </div>
                    </a>
                
                    <a href="2022-web-tutorial/" class="card">
                        <img class="card-img-top" src="2022-web-tutorial/res/DSC_0653b-1024x1536.jpg"/>
                        <div class="card-body">
                            <h5 class="card-title">Danicucina Web Tutorial</h5>
                            <p class="card-text">Websited based on recipes from <span href="https://blog.giallozafferano.it/danicucina/">Danicucina</span>, to teach website developement (2022).</p>
                            <span class="btn btn-primary">Open</span>
                        </div>
                    </a>
                

                </div>
            </div>
        </div>
    </div>

    <div class="separator">
        <?php include('../components/ads_banner.html'); ?>
    </div>

    <?php include('../components/footer.php'); ?>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Custom -->
    <script src="/scripts/parallax.js"></script>
</body>
</html>