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

    <!-- font-awesome -->
    <link rel="stylesheet" href="<?=base_url('assets/fontawesome-free-5.7.0-web/css/all.min.css')?>">




</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2 bg-success col-sm-4">
                <nav class="navbar navbar-nav text-dark navbar-side" role="navigation">
                    <span class="navbar-brand nav-link" href="# ">
                        <span style="font-size: x-large" class="mt-4">
                            <a href="<?=base_url('welcome/dashboard')?>" style="text-decoration:none;">
                                <img src="<?=base_url('assets/img/logo2.png')?>" style="width:100%" alt=""><br>
                            </a>

                            <!-- navbar-expand-lg  problem causer-->
                        </span>
                    </span>

                    <button class="navbar-toggler  text-light border-secondary btn-sm" type="button"
                        data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">

                        <form class="form-inline my-2 my-lg-0">
                            <div class="collapse navbar-collapse" id="navbarText">
                                <div class=" ml-2 mt-2">

                                    <ul class="navbar-nav">
                                        <?php if($this->session->userdata('role')=='user' && $this->session->userdata('status')=='Active'){?>
                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?=base_url('services/')?>">
                                                <i class="fas fa-fw fa-tools"></i>
                                                Services
                                            </a>
                                        </li>

                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?=base_url('orders/')?>"
                                                style="text-decoration:none;">
                                                <i class="fa fa-fw fa-cart-plus"></i>
                                                Orders
                                            </a>
                                        </li>

                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?=base_url('company/view_reviews')?>"
                                                style="text-decoration:none;">
                                                <i class="fas fa-fw fa-comment"></i>
                                                Reviews
                                            </a>
                                        </li>
                                        <?php }?>

                                        <?php if($this->session->userdata('role')=='admin'){?>
                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?=base_url('admins/dashboard')?>"
                                                style="text-decoration:none;">
                                                <i class="fas fa-tachometer-alt" aria-hidden="true"></i>&nbsp;Dashboard
                                            </a>
                                        </li>
                                        <?php }?>

                                        <?php if($this->session->userdata('role')=='admin'){?>
                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?=base_url('admins/')?>"
                                                style="text-decoration:none;">
                                                <i class="fas fa-fw fa-users"></i> Admins
                                            </a>
                                        </li>
                                        <?php }?>


                                        <?php if($this->session->userdata('role')=='admin'){?>
                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?=base_url('company/view_all')?>"
                                                style="text-decoration:none;">
                                                <i class="fas fa-fw fa-building"></i>Companies
                                            </a>
                                        </li>
                                        <li class=" nav-item m-2">
                                            <a href="<?=base_url('category/')?>" style="text-decoration:none;">
                                                <i class="fas fa-fw fa-map"></i>&nbsp;Category
                                            </a>
                                        </li>
                                        <?php }?>




                                    </ul>



                                    <div class="jumbotron bg-success mt-5 pt-5"></div>
                                    <div class="jumbotron bg-success mt-5 pt-5"></div>
                                    <div class="jumbotron bg-success mt-5 pt-5"></div>
                                </div>
                            </div>
                        </form>
                    </div>


                </nav>

            </div>

            <div class="col-md-10 col-sm-6">
                <nav class="navbar navbar-expand-sm navbar-default navbar-cls-top shadow text-dark ">

                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <?= $this->session->userdata('company_name');?>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                            </li>
                            <li class="nav-item">

                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0 mr-5 pr-5 ">
                            <?php if($this->session->userdata('role')=='user'&& $this->session->userdata('status')=='Active'){?>
                            <a class="nav-link" href="#"> <i
                                    class="fas fa-fw fa-user"></i>&nbsp<?= $this->session->userdata('company_name');?></a>
                            <?php }elseif($this->session->userdata('role')=='admin'){?>
                            <a class="nav-link" href="#"> <i
                                    class="fas fa-fw fa-user"></i>&nbsp<?= $this->session->userdata('name').' '.$this->session->userdata('surname').' ('.ucfirst($this->session->userdata('role')).')';?></a>
                            <?php }?>
                            <a class="nav-link" href="<?= base_url('welcome/logout')?>"> <i
                                    class="fas fa-fw fa-sign-out-alt"></i>&nbsp;Logout</a>
                        </form>
                    </div>
                </nav>