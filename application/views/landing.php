<?php include('_header.php')?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5">
            <p>
                <?php $success_msg= $this->session->flashdata('success_msg');
                                            $error_msg= $this->session->flashdata('error_msg');
                                            if($success_msg){ ?>
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
            <form action="<?= base_url('welcome/search')?>" method="post" class=" mt-5" role="main">
                <div class="row">
                    <!-- <h1>Please select the encountered problem and the select your location.</h1> -->

                    <hr>
                    <hr>
                    <div class="col-md-7">

                        <div class="form-group">
                            <label for="Problem">Select problem:</label>
                            <select class="form-control" name="problem" id="">
                                <option value="">--Select--</option>
                                <?php if(is_array($macategory1)){ 
                                    foreach($macategory1 as $c) {?>
                                <option value="<?=$c->id?>"><?=$c->sub_category?></option>
                                <?php }}?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="city">Select city:</label>

                            <select name="city" class="form-control" id="">
                                <option value="">--Select--</option>
                                <option value="Gweru">Gweru</option>
                                <option value="Harare">Harare</option>
                                <option value="Kadoma">Kadoma</option>
                                <option value="Kwekwe">Kwekwe</option>
                                <option value="Chegutu">Chegutu</option>
                                <option value="Norton">Norton</option>
                                <option value="Marondera">Marondera</option>
                                <option value="Bulawayo">Bulawayo</option>
                                <option value="Gwanda">Gwanda</option>
                                <option value="Chiredzi">Chiredzi</option>
                                <option value="Mutare">Mutare</option>
                            </select>


                        </div>
                    </div>
                    <div class="col-md-1 mt-4 pt-2">
                        <button type="submit" class="btn btn-outline-primary">Go</button>

                    </div>
                </div>

            </form>
            <!-- <div class="input-group mt-5 pt-5">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />


            </div> -->
        </div>
        <div class="col-md-2"></div>
    </div>


    <div class="row">
        <div class="col-md-1">

            <!-- <h4 class="text-light-50">Sort by:</h4>
            <select class="form-control" name="" id="">
                <option value="">Category</option>
                <option value="">Alphabet</option>
                <option value=""></option>
            </select> -->
        </div>

    </div>




</div>

<?php include('_footer.php')?>