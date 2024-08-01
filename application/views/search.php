<?php include('_header.php')?>
<div class="container mt-5 "></div>


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
            <form action="<?= base_url('welcome/search')?>" method="post" class=" " role="main">
                <div class="row">
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
                                <option value="Gweru">Gweru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1 mt-4 pt-2">
                        <button type="submit" class="btn btn-outline-primary">Go</button>

                    </div>
                </div>

            </form>

        </div>
        <div class="col-md-2"></div>
    </div>
    <h2>Search results: </h2>

    <div class="row">
        <div class="col-md-1">

            <!-- <h4 class="text-light-50">Sort by:</h4>
            <select class="form-control" name="" id="">
                <option value="">Category</option>
                <option value="">Alphabet</option>
                <option value=""></option>
            </select> -->
        </div>

        <div class="col-md-10 mb-5 pb-5">
            <?php
$total=0;
                    if(count($maresults)>0)
                    {
                    foreach ($maresults as $r) {
                        
                    ?>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- <?php echo("<img  class='media-object img-thumbnail user-img' alt='User Picture' height='10px' width='100px' src='data:image/jpeg;base64,".base64_encode($d->link)."' />"); ?> -->
                            <img src="<?=base_url('uploads/'.$this->usersmodel->logo($r->company))?>"
                                alt="Company logo">

                            <?php 
                            $logo=base_url('uploads/'.$this->usersmodel->logo($r->company));
                            $address=$this->usersmodel->address($r->company);
                            $telephone=$this->usersmodel->telephone($r->company);
                            // $this->session->set_userdata('logo',$logo);
                            // $this->session->set_userdata('address',$address);
                            // $this->session->set_userdata('telephone',$telephone);
                            // var_dump($this->session->userdata('telephone'));
                            ?>

                        </div>
                        <div class="col-md-5">
                            <!-- <?php
                             $this->session->set_userdata('service_id',$r->sub_category);
                             ?> -->
                            <?php 
                            // $this->session->set_userdata('services_id',$r->id);
                            // var_dump($this->session->userdata('services_id'));
                            ?>
                            <?php
                            // $company= 0;
                            // $this->session->set_userdata('company_id',$r->company);
                            // $company=$this->session->userdata('company_id');
                            ?>
                            <h2>
                                <?=$this->usersmodel->title($r->company);?>
                                <!-- $this->session->set_userdata('company',$this->usersmodel->title($r->company)) -->
                            </h2>

                            <p>
                            <h6>Location:
                                <em><?=$r->location; ?></em>
                            </h6>
                            </p>
                            <p>
                            <h6>Price/km(outside city):
                                US$<em><?=$r->price_per_km;?>
                                </em></h6>
                            </p>
                            <p>
                                <!-- <h6>Services: <em>
                                    <?=$this->categoriesmodel->title($r->sub_category);?>
                                    $this->session->set_userdata('subcategory',$this->categoriesmodel->title($r->sub_category));$this->session->set_userdata('category',$this->categoriesmodel->title($r->category))
                                </em>
                            </h6> -->
                            <div class="d-flex flex-row">
                                <div class="p-2 bg-secondary">
                                    <a href="https://wa.me/263<?=$this->usersmodel->whatsapp($r->company)?>"><i
                                            class=" fab fa-fw fa-whatsapp"></i></a>
                                </div>
                                <div class="p-2 bg-success">
                                    <a href="tel:263<?=$this->usersmodel->telephone($r->company)?>"><i
                                            class=" fas fa-fw fa-phone"></i></a>
                                </div>
                                <!-- <div class="p-2 bg-success">
                                    <a href="<?=base_url('company/')?>">More</a>
                                </div> -->
                            </div>




                            </p>
                        </div>
                        <div class="col-md-4 mt-1">

                            <div class="ratings ml-5 pl-5">
                                <h6>Ratings</h6>
                                <?php
                                //  echo $this->session->userdata('ratings');
                                // var_dump($r->id);
                                ?>
                                <?= $this->reviewsmodel->read2($r->company,$r->id); ?>
                                <br>
                                <p class="" style="color:green">
                                <form action="<?= base_url('company/')?>" method="post">

                                    <input type="hidden" value="<?=$r->id?>" name="service">
                                    <input type="hidden" value="<?=$r->company?>" name="company" id="">
                                    <input type="submit" class="btn btn-success btn-sm" value="Rate">
                                </form>
                                </p>
                                <div class="quotation mt-4 pt-4">
                                    <form action="<?= base_url('quotation/add')?>" method="post">

                                        <input type="hidden" value="<?=$r->id?>" name="service">
                                        <input type="hidden" value="<?=$r->company?>" name="company" id="">
                                        <input type="submit" class="btn btn-success btn-sm" value="Get Quotation">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <?php 
                        //    echo $company;
                            ?>
            <?php

                }
                }
                else
                {
                ?>
            <div class="container">
                <div class="alert alert-danger text-center">
                    <p>No search results were found. <a href="<?=base_url('welcome/')?>">Back</a></p>
                </div>
            </div>

            <?php
                }
                ?>
        </div>
    </div>


</div>






<?php include('_footer.php')?>