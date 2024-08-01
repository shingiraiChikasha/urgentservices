<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

<style>
body {

    background-image: url('<?=base_url('assets/img/3.jpg')?>');
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}

/*
.card {
    filter:
        blur(8px);
    -webkit-filter:
        blur(8px);
} */
</style>

<div class="container-fluid">
    <div class="row mt-5 pt-5">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
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
            <div class="card text-dark shadow bg-transparent">
                <div class="card-header text-center">Login to continue</div>
                <div class="card-body">
                    <form action="<?= base_url('admins/login_admin')?>" method="post">
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
                        <button type="submit" class="btn btn-primary form-control">Login</button>
                    </form>
                    <div class="form-group">
                        <a href="<?=base_url('welcome/')?>">
                            <button class="btn btn-success btn-sm form-control">Home</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>

    </div>
</div>