<?php include('_header1.php')?>
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
        foreach($madetails as $d){ ?>

    <form action="<?= base_url('company/update')?>" method="post">
        <input type="hidden" name="id" value=<?=$d->id?>>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Company Name</label>
                <input type="text" class="form-control" disabled name="" id="" value="<?=$d->company_name?>">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Headquarters</label>
                <input type="text" class="form-control" disabled name="" id="" value="<?=$d->hq?>">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Zimra License Number</label>
                <input type="text" class="form-control" disabled name="" id="" value="<?=$d->licence_number?>">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Telephone</label>
                <input type="text" class="form-control" disabled name="" id="" value="<?=$d->telephone?>">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Email</label>
                <input type="text" class="form-control" disabled name="" id="" value="<?=$d->email?>">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Whatsapp</label>
                <input type="text" class="form-control" disabled name="" id="" value="<?=$d->whatsapp?>">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="<?=$d->status?>"><?=$d->status?></option>
                    <option value="Active">Active</option>
                    <option value="Pending">Pending</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>

        </div>
        <input type="submit" class="btn btn-primary form-control float-right" value="Update">
    </form>

    <?php }}?>
</div>
<?php include('_footer1.php')?>