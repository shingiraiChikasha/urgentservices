<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <style>
    body {

        background-image: url('<?=base_url('assets/img/3.jpg')?>');
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    .card {
        background: rgb(211, 211, 211, 0.5);
    }


    /*
.card {
    filter:
        blur(8px);
    -webkit-filter:
        blur(8px);
} */
    </style>
</head>

<div class="container">
    <div class="row mt-3 pt-5">
        <div class="col-md-2"></div>
        <p class="">
            <a href="<?=base_url('welcome/')?>">
                <button class="btn btn-success btn-sm float-left">Home</button>
            </a>
        </p>
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



            <div class="card shadow text-dark-50">
                <div class="card-header text-center ">
                    <h3>SignUp Form</h3>
                    <p>Already have an account? <a href="<?=base_url('welcome/login')?>">Sign In
                        </a></p>

                </div>
                <div class="card-body">
                    <form action="<?= base_url('welcome/insert')?>" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="first_name"> Company name</label>
                                        <input type="text" class="form-control" name="company_name"
                                            value="<?=set_value('company_name');?>" placeholder="Company name" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="hq">Address</label>
                                        <input type="text" class="form-control" name="hq"
                                            placeholder="Building number, street name, city" id=""
                                            value="<?=set_value('hq');?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="hq">ZIMRA Licence number</label>
                                        <input type="text" class="form-control" name="licence_number"
                                            placeholder="ZIMRA Licence number" id=""
                                            value="<?=set_value('licence_number');?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="telephone">Telephone number</label>
                                        <input type="tel" class="form-control" name="telephone" placeholder="07********"
                                            id="" value="<?=set_value('telephone');?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="<?=set_value('email');?>" placeholder="example@gmail.com" id="">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-md-6">
                                 <div class="form-group">
                                     <div class="form-group-label">
                                         <label for="phone">Phone number</label>
                                         <input type="tel" class="form-control" name="phone" placeholder="236712345678"
                                             id="">
                                     </div>
                                 </div>
                             </div> -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="phone">Whatsapp</label>
                                        <input type="tel" class="form-control text-50" name="whatsapp"
                                            value="<?=set_value('whatsapp');?>" placeholder="07********" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="role">Company logo</label>
                                        <input type="file" name="thefile" id="" value="<?=set_value('thefile');?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group-label">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password"
                                            placeholder="Confirm Password" id="" value="<?=set_value('file');?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class=" btn btn-success btn-sm form-control">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                </div>
                <div class="form-group">

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>