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
    <style>
    body {

        background-image: url('<?=base_url('assets/img/3.jpg')?>');
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    .logincard {
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




<div class="container-fluid ">
    <div class="row mt-5 pt-5 ">

        <div class="col-md-4 col-sm-12">

        </div>
        <div class="login_card col-md-4 col-sm-12">
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
            <div class="card text-dark shadow logincard" id="logincard">
                <div class="card-header text-center">Login to continue</div>
                <div class="card-body">
                    <form action="<?= base_url('welcome/login_user')?>" method="post">
                        <div class="form-group">
                            <div class="form-group-label">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" name="email"
                                    id="">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success form-control">Login</button>
                    </form>
                </div>
                <div class="card-footer">Don't have an account? <a href="<?=base_url('welcome/register')?>">SignUp
                        now</a>
                </div>
                <div class="form-group">
                    <a href="<?=base_url('welcome/')?>">
                        <button class="btn btn-success btn-sm form-control">Home</button>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-4">

        </div>

    </div>
</div>

</html>