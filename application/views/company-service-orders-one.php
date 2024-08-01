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
        <?php if(is_array($maorder)){
            foreach($maorder as $d){?>
        <div class="card">

            <div class="card-body">
                <div class="form">
                    <form action="<?= base_url('orders/update')?>" method="post">
                        <input type="hidden" name="id" value=<?=$d->id?>>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Client name</label>
                                <input type="text" class="form-control" disabled name="first_name" id=""
                                    value="<?=$d->client_name?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Contact details</label>
                                <input type="text" class="form-control" disabled name="surname" id=""
                                    value="<?=$d->phoneNumber?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Service type</label>
                                <input type="text" class="form-control" disabled name="email" id=""
                                    value="<?=$this->servicesmodel->title($d->service)?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Quantity</label>
                                <input type="number" class="form-control" disabled name="first_name" id=""
                                    value="<?=$d->quantity?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Car name & model</label>
                                <input type="text" class="form-control" disabled name="surname" id=""
                                    value="<?=$d->car_name.' '.$d->car_model?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Car registration</label>
                                <input type="text" class="form-control" disabled name="first_name" id=""
                                    value="<?=$d->reg_number?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Color</label>
                                <input type="text" class="form-control" disabled name="surname" id=""
                                    value="<?=$d->color?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Location</label>
                                <input type="text" class="form-control" disabled name="surname" id=""
                                    value="<?=$d->location?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Date &amp; time</label>
                                <input type="email" class="form-control" disabled name="email" id=""
                                    value="<?=$d->mdt?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="<?=$d->status?>"><?=$d->status?></option>
                                    <option value="Active">Completed</option>
                                    <option value="Pending">Pending</option>
                                    <!-- <option value="Rejected">Rejected</option> -->
                                </select>
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