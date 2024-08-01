<?php include('_header.php')?>

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row">
                <?php $company=$this->session->userdata('company1');?>
                <div class="col-md-3">
                    <img src="<?=base_url('uploads/'.($this->usersmodel->logo($company)))?>" class="float-left"
                        style="width:70%" alt="">
                </div>
                <div class="col-md-6 pt-5 mt-3">

                    <h2><?=
                    
                    $this->usersmodel->title($company)?></h2>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <!-- <div class="breadcrumb bg-success">
        <span>
            <a href="<?=base_url('welcome/')?>">Home</a>\
            <a href="<?=base_url($this->uri->segment(1))?>">Company</a>
            <a href=""></a>
        </span>
    </div> -->
    <div class="row">
        <div class="col-md-10">
            <!-- <div class="card">
                <div class="card-body">


                    <div class="company_biography">


                        <p>
                            Founder:
                            <br>
                            <span>Year established:</span>
                            <br>
                            <span>Number of branches:</span>
                            <br>
                            <span>Awards:</span>
                            <br>
                            <span>Company website:</span>
                            <br>
                            <span>Ratings</span>
                        </p>

                    </div>

                </div>
            </div> -->


            <h5 class="mt-3">Leave a reply</h5>
            <p>
                <?php $success_msg= $this->session->flashdata('success_msg');
          $error_msg= $this->session->flashdata('error_msg');
          if($success_msg){?>
            <div class="alert alert-success">
                <?php echo $success_msg; ?>
            </div>
            <?php }
          if($error_msg){ ?>
            <div class="alert alert-danger">
                <?php echo $error_msg; ?>
            </div>
            <?php } ?>
            </p>
            <div class="form">
                <form action="<?=base_url('company/reviews')?>" method="post">
                    <input type="hidden" name="service" value="<?=$this->session->userdata('service_id')?>">
                    <input type="hidden" name="company" value="<?=$this->session->userdata('company1')?>">
                    <!-- <?php var_dump($this->session->userdata('service_id'))?> -->
                    <!-- <?php var_dump($this->session->userdata('company1'))?> -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your name</label>
                            <input type="text" class="form-control" name="zita" id="" placeholder="e.g.John Doe">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your email</label>
                            <input type="email" class="form-control" name="email" id=""
                                placeholder="e.g.example@gmail.com">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="ratings">Ratings:</label>
                            <span class="reviews">
                                <label for="">1</label>
                                <input type="radio" name="rating" value="1" id="">
                                <label for="">2</label>
                                <input type="radio" name="rating" value="2" id="">
                                <label for="">3</label>
                                <input type="radio" name="rating" value="3" id="">
                                <label for="">4</label>
                                <input type="radio" name="rating" value="4" id="">
                                <label for="">5</label>
                                <input type="radio" name="rating" value="5" id="">
                                <label for="">6</label>
                                <input type="radio" name="rating" value="6" id="">
                                <label for="">7</label>
                                <input type="radio" name="rating" value="7" id="">
                                <label for="">8</label>
                                <input type="radio" name="rating" value="8" id="">
                                <label for="">9</label>
                                <input type="radio" name="rating" value="9" id="">
                                <label for="">10</label>
                                <input type="radio" name="rating" value="10" id="">
                            </span>

                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="reply" class="form-control" id="" cols="30" rows="10"
                                placeholder="Reply..."></textarea>
                        </div>

                    </div>
                    <button class="btn btn-primary float-right">Submit</button>
                </form>

            </div>
            <div class="heading mt-2">
                <h3>Customer ratings and reviews</h3>
                <hr>
            </div>
            <?php 
            if(is_array($maratings)){
            
            foreach($maratings as $r){ ?>
            <div class="card mb-3">
                <div class="card-body">

                    <div class="reviews">

                        <h6> <i class="fas fa-fw fa-user"></i><?= $r->user_name?></h6>
                        <div class="dropdown-divider"></div>
                        <p><?=$r->user_review?></p>

                        <footer class="footer">
                            <p>Ratings: <?=$r->user_ratings?>/10</p>
                        </footer>

                    </div>
                </div>
            </div>
            <?php } }?>


        </div>
        <div class="col-md-2"></div>

    </div>



</div>
</div>
<?php include('_footer.php')?>