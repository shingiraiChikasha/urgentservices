<?php include('_header1.php')?>
<div class="wrapper">
    <div class="container mt-3">
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
        <?php if(is_array($madetails)){
            foreach($madetails as $d){?>
        <div class="card">
            <div class="card-header">
                View <?=$d->name.' '.$d->surname?> details. <a href="<?=base_url('admins/reset_password')?>"><button
                        type="submit" class="btn btn-primary btn sm">Reset password</button></a>
            </div>
            <div class="card-body">
                <div class="form">
                    <form action="<?= base_url('admins/update')?>" method="post">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" disabled name="first_name" id=""
                                    value="<?=$d->name?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Surname</label>
                                <input type="text" class="form-control" disabled name="surname" id=""
                                    value="<?=$d->surname?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" disabled name="email" id=""
                                    value="<?=$d->email?>">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary form-control float-right">Submit</button>
                        <!-- <input type=" submit" class="btn btn-primary form-control float-right" value="Submit"> -->
                    </form>
                </div>
            </div>
        </div>
        <?php }}?>
    </div>
</div>
<?php include('_footer1.php')?>