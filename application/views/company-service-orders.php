<?php include('_header1.php')?>

<div class="container">

    <div class="card shadow mt-3">
        <div class="card-header">
            <p> <?php $success_msg= $this->session->flashdata('success_msg');
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
        </div>
        <div class="card-body">


            <div class="table table-condensed">


                <table class="table table-striped table-condensed table-responsive">


                    <thead>
                        <th>Client name</th>
                        <th>Contact details</th>
                        <th>Service type</th>
                        <th>Quantity</th>
                        <th>Car name & model</th>
                        <th>Registration #</th>
                        <th>Color</th>
                        <th>Location</th>
                        <th>Date &amp; time</th>
                        <th>Status</th>

                        <th></th>
                    </thead>
                    <tbody>
                        <?php 
                        
                        if(is_array($maorders)){
                        foreach($maorders as $o) {
                            if($this->session->userdata('id')==$o->company){ 
                            $btn_class='';
                            if($o->status=="Active") $btn_class="btn-success";
                            if($o->status=="Pending") $btn_class="btn-warning";
                            if($o->status=="Rejected") $btn_class="btn-danger";
                            ?>
                        <tr>
                            <td><?=$o->client_name?></td>
                            <td>+263<?=$o->phoneNumber?></td>
                            <td><?=$this->categoriesmodel->title($this->servicesmodel->title($o->service));?>
                            </td>
                            <td><?=$o->quantity?></td>
                            <td><?=$o->car_name.' '.$o->car_model?></td>
                            <td><?=$o->reg_number?></td>
                            <td><?=$o->color?></td>
                            <td><?=$o->location?></td>
                            <td><?=$o->mdt?></td>

                            <td>
                                <a href="<?=base_url('orders/view/').$o->id?>" style="color:blue">
                                    <button class="btn <?=$btn_class?> btn-sm"><?= $o->status ?></button>
                            </td>
                        </tr>
                        <?php } } }?>
                    </tbody>
                    <tfoot>
                        <th>Client name</th>
                        <th>Contact details</th>
                        <th>Service type</th>
                        <th>Quantity</th>
                        <th>Car name & model</th>
                        <th>Registration #</th>
                        <th>Color</th>
                        <th>Location</th>
                        <th>Date &amp; time</th>
                        <th>Status</th>


                        <th></th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('_footer1.php')?>