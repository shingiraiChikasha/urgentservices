<?php include('_header1.php');


?>

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
        <a href="<?=base_url('admins/admins_add')?>">
            <button type="submit" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i>&nbspAdd Admin</button>
        </a>
        <div class="card">
            <div class="card-header">
                <i class="fa fa-users"></i>&nbspAdministrators
            </div>
            <div class="card-body">
                <div class="table table-responsive border-success">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <th>First name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php if(is_array($maadmin)){
                                foreach($maadmin as $a){?>
                            <tr>
                                <td><?=$a->name?></td>
                                <td><?=$a->surname?></td>
                                <td><?=$a->email?></td>
                                <td> <a href="<?=base_url('admins/view/'.$a->id)?>"> <i class="fa fa-eye"></i>&nbsp;View
                                        more</a>
                                </td>
                                <td> <a href="<?=base_url('admins/delete/'.$a->id)?>"> <i
                                            class="fa fa-trash"></i>&nbsp;Delete
                                    </a>
                                </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('_footer1.php')?>