<?php include('_header1.php')?>

<div class="container">

    <a href="<?=base_url('category/add')?>">
        <button type="submit" class="btn btn-primary mt-5"> <i class="fas fa-fw fa-plus"></i> Add Category</button>
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


            <div class="table ">


                <table class="table table-stripped table-bordered">


                    <thead>
                        <th>Category</th>
                        <th>Sub-Category</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php 
                        if(is_array($macategory)){
                        foreach($macategory as $c) { ?>
                        <tr>
                            <td><?=$c->category?></td>
                            <td><?=$c->sub_category?></td>

                            <td><a href="<?=base_url('category/view/').$c->id?>" style="color:blue"><i
                                        class="fas fa-fw fa-eye"></i> View More</a></td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                    <tfoot>
                        <th>Category</th>
                        <th>Sub-Category</th>
                        <th></th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('_footer1.php')?>