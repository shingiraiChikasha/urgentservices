<?php include('_header1.php')?>
<div class="container mt-3">
    <button class="btn btn-danger"> <a href="<?=base_url('category/delete/').$this->uri->segment(3)?>"><i
                class="fas fa-fw fa-trash"></i> Delete</a></button>
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
    <?php if(is_array($macategory)){ 
        foreach($macategory as $d){ ?>

    <form action="<?= base_url('category/update')?>" method="post">
        <input type="hidden" name="id" value=<?=$d->id?>>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Category</label>
                <input type="text" class="form-control" name="category" id="" value="<?=$d->category?>">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Sub Ctegory</label>
                <input type="text" class="form-control" name="sub_category" id="" value="<?=$d->sub_category?>">
            </div>
        </div>
        <input type="submit" class="btn btn-primary form-control float-right" value="Update">
    </form>

    <?php }}?>
</div>
<?php include('_footer1.php')?>