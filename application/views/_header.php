<!doctype html>
<html lang="en">

<head>
    <title>Urgent Services</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <!--Custom style  -->
    <link rel="stylesheet" href="<?= base_url('assets/style/style.css')?>">
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png')?>" type="image/x-icon">
    <!-- font-awesome -->
    <link rel="stylesheet" href="<?=base_url('assets/fontawesome-free-5.7.0-web/css/all.min.css')?>">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success fixed-top">
        <a class="navbar-brand logo" disabled href="#">
            <img src="<?=base_url('assets/img/logo2.png')?>" style="width:40%" alt="">
            Urgent Services
        </a>
        <button class="navbar-toggler text-light border-secondary" type="button" data-toggle="collapse"
            data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <!-- MENU -->
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('welcome/')?>"><i class="fas fa-home"></i>&nbsp; Home
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('welcome/login')?>"> <i
                                    class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="bundles.php">Buy bundles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="zesa.php">Buy ZESA token</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tips.php">Tips</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li> -->
                    </ul>
                </div>
            </form>
        </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-sm bg-success fixed-top text-dark">
        <a class="navbar-brand nav-link disabled" href="# ">
            <h2 class="ml-5 pl-5 logo"><img src="<?= base_url('assets/img/logo_transparent.png')?>" style="width: 10%"
                    alt="">
            </h2>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                </li>
                <li class="nav-item">

                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 mr-5 pr-5">
                <a class="nav-link" href="<?= base_url('welcome/')?>"><i class="fas fa-home"></i>&nbsp; Home <span
                        class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?= base_url('welcome/')?>"><i class="fas fa-task"></i>Services</a>
                <a class="nav-link" href="<?= base_url('welcome/login')?>"> <i
                        class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
            </form>
        </div>
    </nav> -->