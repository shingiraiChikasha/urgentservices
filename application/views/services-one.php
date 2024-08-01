<?php include("_header1.php")?>
<div class="container">

    <div class="card mt-4">
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
            <div class="form">
                <?php if(is_array($masevhisi)){
                     foreach($masevhisi as $d){?>
                <form action="<?=base_url('services/update')?>" method="post">
                    <input type="hidden" name="id" value="<?=$d->id?>">
                    <div class="form-group">
                        <label for="Services type">Category</label>
                        <select name="category" id="" class="form-control">
                            <option value="<?=$this->categoriesmodel->title($d->category)?>">
                                <?=$this->categoriesmodel->title($d->category)?></option>
                            <?php 
                                if(is_array($macategory)){
                                    foreach($macategory as $s){
                                ?>
                            <option value=" <?=$s->id?>"><?=$s->category?></option>
                            <?php }}?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Services type">Sub-Category</label>
                        <input type="text" class="form-control" value="<?=$d->sub_category?>" name=" sub_category" id=""
                            placeholder="e.g.Tyre Repairs">
                    </div>
                    <div class="form-group">

                        <label for="Services type">Price per km</label>
                        <input type="number" min="1" class="form-control" value="<?=$d->price_per_km?>" name=" price"
                            id="">
                    </div>
                    <div class="form-group">
                        <label for="Services type">Location</label>
                        <input type="text" class="form-control" name="location" id=""
                            placeholder="e.g. Gweru,Harare,Kwekwe" value="<?=$d->location?>">
                    </div>
                    <div class=" form-group">
                        <label for="Services type">Description</label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="10"
                            placeholder="Description..."><?=$d->service_description?></textarea>
                    </div>
            </div>
        </div>
    </div>


    <button class=" btn btn-primary float-right mt-4">Update</button>
    </form>
    <?php } }?>
</div>
</div>


<?php include('_footer1.php')?>