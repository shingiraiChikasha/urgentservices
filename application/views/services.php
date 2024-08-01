<?php include('_header1.php')?>

<div class="container">

    <a href="<?=base_url('services/add')?>">
        <button type="submit" class="btn btn-primary mt-5"> <i class="fas fa-fw fa-plus"></i> Add Service</button>
    </a>
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


            <div class="table table-responsive">


                <table class="table table-stripped table-bordered">


                    <thead>
                        <th>Location</th>
                        <th>Price per km</th>
                        <th>Category</th>
                        <th>Sub-Category</th>
                        <th>Description</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php  if(!empty($maservices)){
                        if(is_array($maservices)){
                        foreach($maservices as $s) { ?>
                        <tr>
                            <td><?=$s->location?></td>
                            <td><?=$s->price_per_km?></td>
                            <td><?=$this->categoriesmodel->title($s->category)?></td>
                            <td><?=$this->categoriesmodel->subCategoryTitle($s->sub_category)?></td>
                            <td><?=$s->service_description?></td>
                            <td><a href="<?=base_url('services/view/').$s->id?>" style="color:blue"><i
                                        class="fas fa-fw fa-eye"></i> View More</a></td>
                            <td> <a href="<?=base_url('services/delete/'.$s->id)?>"> <i
                                        class="fa fa-trash"></i>&nbsp;Delete
                                </a>
                            </td>
                        </tr>


                        <?php }
                    
                    }}else{?>
                        <tr>
                            <td>Nothing to display</td>
                            <td>Nothing to display</td>
                            <td>Nothing to display</td>
                            <td>Nothing to display</td>
                            <td>Nothing to display</td>
                        </tr>
                        <?php }?>

                    </tbody>
                    <tfoot>
                        <th>Location</th>
                        <th>Price per km</th>
                        <th>Category</th>
                        <th>Sub-Category</th>
                        <th>Description</th>
                        <th></th>
                        <th></th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('_footer1.php')?>