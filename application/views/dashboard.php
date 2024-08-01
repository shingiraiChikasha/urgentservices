<?php include('_header1.php');
$services=0;
?>

<div class="container ">
    <div>
        <?php if($this->session->userdata('status')=="Active") {?>
        <div class="alert alert-success mt-5">
            <p>Welcome <?=$this->session->userdata('company_name')?></p>
        </div>
        <?php }elseif($this->session->userdata('status')=="Pending") { ?>
        <div class="alert alert-danger mt-5">
            <p><?=$this->session->userdata('company_name')?>, your account is pending approval. </p>
        </div>
        <?php }?>
    </div>
</div>


<!-- <div class="col-md-6">
        <div class="card shadow mt-3">
            <div class="card-body">
                <h5>Locations</h5>
                <?php if ($maservices) {
                   $services=count($maservices);
                   
                }
                
?>
                <p class="ml-1" style="font-size:x-large;"><?=$services?></p>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow mt-3">
            <div class="card-body">
                <h5>Services</h5>
                <?php if ($maservices) {
                   $services=count($maservices);
                   
                }
                
?>
                <p class="ml-1" style="font-size:x-large;"><?=$services?></p>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card shadow mt-3">
            <div class="card-header">
                <h5>Services</h5>
            </div>
            <div class="card-body">

                <?php if ($maservices) {
                   $services=count($maservices);
                   
                }
                echo $services;
                ?>
                <div class="progress-bar" role="progressbar" style="width:<?=$services?>"></div>
                <p class="ml-1" style="font-size:x-large;"><?=$services?></p>
            </div>
        </div>
    </div> -->

<?php include('_footer1.php')?>