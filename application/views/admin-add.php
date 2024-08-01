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
        <div class="card">
            <div class="card-header">
                <i class="fa fa-plus"></i>&nbsp;Add admin
            </div>
            <div class="card-body">
                <div class="form">
                    <form action="<?= base_url('admins/insert')?>" method="post">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Surname</label>
                                <input type="text" class="form-control" name="surname" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary form-control float-right">Submit</button>
                        <!-- <input type=" submit" class="btn btn-primary form-control float-right" value="Submit"> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('_footer1.php')?>