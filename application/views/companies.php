<?php include('_header1.php')?>
<div class="container">
    <div class="wrapper">
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
            <div class="card-header"><i class="fa fa-building"></i>&nbsp;Companies</div>
            <div class="card-body">
                <div class="table table-responsive table-hover table-condensed">
                    <table class="table  table-bordered ">
                        <thead>
                            <th>Company name</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php if(is_array($macompany)){
                        foreach($macompany as $c){
                            $btn_class='';
                            if($c->status=="Active") $btn_class="btn-success";
                            if($c->status=="Pending") $btn_class="btn-warning";
                            if($c->status=="Rejected") $btn_class="btn-danger";
                            
                            ?>

                            <tr>
                                <td><?=$c->company_name?></td>
                                <td><?=$c->hq?></td>

                                <td>
                                    <a href="<?=base_url('company/view/'.$c->id)?>">
                                        <button class="btn <?=$btn_class?> btn-sm disabled"><?= $c->status ?></button>
                                    </a>
                                </td>
                                <td> <a href="<?=base_url('company/view/'.$c->id)?>"> <i
                                            class="fa fa-eye"></i>&nbsp;View
                                        more</a>
                                </td>
                                <td> <a href="<?=base_url('company/delete/'.$c->id)?>"> <i
                                            class="fa fa-trash"></i>&nbsp;Delete
                                    </a>
                                </td>
                            </tr>
                            <?php }}?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('_footer1.php')?>