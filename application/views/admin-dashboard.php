<?php
include('_header1.php'); $services=0;?>
<div class="container">
    <div class="alert alert-success mt-5">
        <p>Welcome
            <?=' '.($this->session->userdata('role')).' ,'.$this->session->userdata('name').' '.$this->session->userdata('surname')?>
        </p>
    </div>
    <div class="wrapper mt-5">
        <div class="card">
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-condensed table-striped">
                        <thead>
                            <th>Company name</th>
                            <th>Zimra license number</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <?php if(!empty($macompany)){ 
                                foreach($macompany as $c){
                                     if($c->status=="Pending"){?>
                            <tr>
                                <td><?=$c->company_name?></td>
                                <td><?=$c->licence_number?></td>
                                <td>
                                    <a href="<?=base_url('company/view/'.$c->id)?>">
                                        <button class="btn btn-warning"><?=$c->status?></button>
                                    </a>
                                </td>
                            </tr>

                            <?php } } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include('_footer1.php')?>