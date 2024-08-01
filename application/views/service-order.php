<?php include('_header.php')?>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/style/style.css')?>">

<div class="container">
    <div class="row mt-3 pt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <p>
                <?php $success_msg= $this->session->flashdata('success_msg');
                                            $error_msg= $this->session->flashdata('error_msg');
                                            if($success_msg){ ?>
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

            <div class="card shadow bg-white mt-5 text-dark-50">
                <div class="card-header text-center ">
                    <h3>Please fill the form</h3>
                    <p>Please note that these details will be used for vehicle identification.</p>


                </div>
                <div class="card-body">
                    <form action="<?= base_url('services/order')?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="first_name">Client name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="<?=set_value('name');?>" placeholder="e.g.John Doe" id=""
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="phone">Phone number</label>
                                        <input type="tel" class="form-control" name="phone" placeholder="e.g.0782221111"
                                            id="" value="<?=set_value('phone');?>">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="<?=set_value('email');?>" autocomplete="off"
                                            placeholder="e.g.example@gmail.com" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="email">Make</label>
                                        <input type="text" class="form-control" name="car_name"
                                            value="<?=set_value('car_name');?>" placeholder="e.g.Toyota" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="email">Model</label>
                                        <input type="text" class="form-control" name="car_model"
                                            value="<?=set_value('car_model');?>" placeholder="e.g.Wish" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="email">Car registration number</label>
                                        <input type="text" class="form-control" name="reg_number"
                                            value="<?=set_value('reg_number');?>" placeholder="e.g.ABC1234" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="email">Color</label>
                                        <input type="text" class="form-control" name="color"
                                            value="<?=set_value('color');?>" placeholder="e.g.Blue" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="quantity">Quantity of items(if applicable)</label>
                                        <input type="number" class="form-control" min="1" max="18" name="qty"
                                            value="<?=set_value('qty');?>" id="">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<?php include('_footer.php')?>