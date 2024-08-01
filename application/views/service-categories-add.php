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

                <form action="<?=base_url('category/create')?>" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="Services type">Category</label>
                            <input type="text" class="form-control" name="category" id=""
                                placeholder="e.g.Tyres & Suspension">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Services type">Sub-Category</label>
                            <input type="text" class="form-control" name="sub_category" id=""
                                placeholder="e.g.Tyre Repairs">
                        </div>
                    </div>
                    <button class="btn btn-primary float-right">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <?php include('_footer1.php')?>