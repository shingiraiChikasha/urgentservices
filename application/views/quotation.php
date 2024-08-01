<!-- <!doctype html>
<html lang="en"> -->

<!-- <head> -->
<title>Urgent Services</title>
<!-- Required meta tags -->
<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
<!--Custom style  -->
<link rel="stylesheet" href="<?= base_url('assets/style/style.css')?>">

<!-- font-awesome -->
<link rel="stylesheet" href="<?=base_url('assets/fontawesome-free-5.7.0-web/css/all.min.css')?>">

<!-- </head> -->


<!-- <body> -->
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <a href="<?=base_url('welcome/search')?>" class="ml-5 pl-5">
                <button class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</button>
            </a>
            <a href="<?=base_url('services/customer_proceed')?>">
                <button type="button" class="btn btn-success float-right"><i class="fa fa-arrow-right"
                        aria-hidden="true"></i>&nbsp;Proceed to order</button>
            </a>






            <div class="card shadow mt-5 mb-5 p-5">
                <?php $service=$this->session->userdata('company_id');
                    // var_dump($this->session->userdata('service'));
                    ?>
                <div class="headings">
                    <img src="<?=base_url('uploads/'.($this->usersmodel->logo($this->servicesmodel->company_name($service))))?>"
                        class=" ml-5 mt-3 float-right" style="width:20%" alt="">
                    <p class="float-left mt-2 mr-5 text-left h6">
                        <b>
                            <p class="h3">
                                <?=
                                   $this->usersmodel->title($this->servicesmodel->company_name($service)) ;
                                    ?>
                            </p>

                            <?= $this->usersmodel->address($this->servicesmodel->company_name($service));?>
                            <br>
                            Zimbabwe
                            <br>
                            Telephone: +263
                            <?=$this->usersmodel->telephone($this->servicesmodel->company_name($service));?>
                            <br>
                        </b>
                    </p>
                </div>

                <div class="customer_details mt-3 ml-4 pt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Client details</h4>
                            <span> <b><?=$this->input->post('name')?></b> </span>
                            <br>
                            <span> <b><?=$this->input->post('phone')?></b> </span>
                            <br>
                            <span> <b><?=$this->input->post('email')?></b> </span>
                        </div>
                        <div class="col-md-4">
                            <!-- <h4>Client detail</h4>
                                <span>Client name: Shingirai Chikasha</span>
                                <br>
                                <span>Client name: Shingirai Chikasha</span>
                                <br>
                                <span>Client name: Shingirai Chikasha</span> -->
                        </div>
                        <div class="col-md-4  mt-4 pt-3">

                            <span> <b>Date: <?= date('M-d-Y'); ?></b> </span>
                            <br>
                            <span><b>Location: <?=$this->session->userdata('city')?></b></span>
                            <br>
                            <!-- <span>Client name: Shingirai Chikasha</span> -->
                        </div>
                    </div>
                </div>


                <div class="card-body">

                    <div class="table">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <th>Qty</th>
                                <th>Items</th>
                                <th>Unit price (US$)</th>
                                <th>Amount (US$)</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $qty=$this->input->post('qty');
                                        if($qty==''){
                                            $qty=1;
                                        }?>
                                    <td><?=$qty?></td>
                                    <td><?=$this->categoriesmodel->title(($this->servicesmodel->title($service))); 
                                        // $this->session->userdata('subcategory')
                                        ?>
                                    </td>
                                    <td><?=$this->servicesmodel->price($service)?></td>
                                    <td><?=$this->servicesmodel->price($service)*$qty;?></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><b>Subtotal</b></td>
                                    <td><b><?=$this->servicesmodel->price($service)*$qty?></b></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><b>Total</b></td>
                                    <td><b><?=$this->servicesmodel->price($service)*$qty?></b></td>
                                </tr>
                            </tbody>
                            <!-- <tfoot class="table-dark">
                                        <th>Qty</th>
                                        <th>Items</th>
                                        <th>Subtotal</th>
                                        <th>Total</th>
                                    </tfoot> -->
                        </table>
                    </div>
                </div>
                <div class="jumbotron mb-5 mt-5 bg-white">

                </div>
                <div class="jumbotron mb-3 mt-3 bg-white">

                </div>

            </div>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<!-- </body> -->

<!-- </html> -->