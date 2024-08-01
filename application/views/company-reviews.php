<?php include('_header1.php')?>

<div class="container">
    <h3>Customer ratings and reviews</h3>
    <?php $total=0;
    if (is_array($maratings)) {
       
    
    foreach($maratings as $r){ 
        
        ?>
    <div class="card mb-3">
        <div class="card-body">

            <div class="reviews">

                <h6> <i class="fas fa-fw fa-user"></i><?= $r->user_name?></h6>
                <div class="dropdown-divider"></div>
                <p>Service: <?=$this->categoriesmodel->subCategoryTitle($this->servicesmodel->category($r->service))?>
                </p>
                <p><?=$r->user_review?></p>

                <footer class="footer">
                    <p>Ratings: <?=$r->user_ratings?>/10</p>
                    <?php $ratings= $r->user_ratings; ?>
                </footer>

            </div>
        </div>
    </div>

    <?php  
    } 
//     $total=$total+$ratings;
//  $Total=($total/100)*10;
//  $this->session->set_userdata('ratings',$Total);
// echo $this->session->userdata('ratings');
// echo 'Total: '.$Total.'/5';


}?>
</div>

<?php include('_footer1.php')?>