<?php include("_header1.php")?>
<div class="container">

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

    <div class="card mt-3">

        <div class="card-header">
            <h4>Complete the following form</h4>
        </div>
        <div class="card-body">
            <div class="form ">

                <form action="<?=base_url('services/insert')?>" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="Services type">Category</label>
                            <select name="category" id="" class="form-control">
                                <option value="">--Select--</option>
                                <?php 
                                $category='';
                                if(is_array($macategory)){
                                    foreach($macategory as $s){
                                        if($category!=$s->category){
                                            $category=$s->category;
                                ?>
                                <option value="<?=$s->id?>"><?=$category?></option>
                                <?php }elseif($category==$s->category){
                                    ?>
                                <option value="<?=$s->id?>"><?=$category?></option>
                                <?php
                                
                                }
                            
                            }}?>
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Services type">Service</label>
                            <select class="form-control" name="sub_category" id="">
                                <option value="">--Select--</option>
                                <?php if(is_array($macategory1)){ 
                                    foreach($macategory1 as $c) {?>
                                <option value="<?=$c->id?>"><?=$c->sub_category?></option>
                                <?php }}?>
                            </select>
                            <!-- <input type="text" name="sub_category" id="" class="form-control"
                                placeholder="e.g.Wheel Alignment "> -->
                            <!-- <select name="sub_category" id="" class="form-control">
                                <option value="">--Select--</option>
                                <?php 
                                if(is_array($macategory)){
                                    foreach($macategory as $s){
                                ?>
                                <option value="<?=$s->id?>"><?=$s->sub_category?></option>
                                <?php }}?>
                            </select> -->
                        </div>
                        <div class="form-group col-md-6">

                            <label for="Services type">Price per km</label>
                            <input type="number" min="1" class="form-control" name="price" id="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Services type">Location</label>
                            <input type="text" class="form-control" name="location" id=""
                                placeholder="e.g. Gweru,Harare,Kwekwe">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Services type">Description</label>
                            <textarea name="description" id="" class="form-control" cols="30" rows="10"
                                placeholder="Description..."></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary float-right">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <?php include('_footer1.php')?>