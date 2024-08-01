<?php include('_header.php')?>
<div class="container">
    <p class="mt-5 pt-5">
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
    <a href="<?=base_url('welcome/')?>">
        <button class="btn btn-success form-control">Back</button>
    </a>

</div>
<?php include('_footer.php')?>