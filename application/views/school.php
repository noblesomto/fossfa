

<div class="container">
  <div class="row">
  

   <div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" action="<?php echo base_url(); ?>page/school/<?php echo $user_id ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <div class="text-center">
      <label for="email">Which Insitution do you attend?: <br><small>(À quelle institution assistez-vous?:)</small></label>
      <span class="text-danger"><?php echo form_error('school_name'); ?></span>
    </div>
       <select class="form-control" name="school_name" required="">
        <option value=" ">Choose your School</option>
        <option value="Not Listed">Not Listed</option>
          <?php 

            foreach($school as $row)
            { 
              echo '<option value="'.$row->sch_id.'">'.$row->sch_name.'</option>';
            }
            ?>
            
        </select>
    </div>
</div>

<div class="col-md-4 col-md-offset-4 text-center">
    <div class="form-group">
     
      <div class="col-sm-12">
        <div class="col-sm-6">
          <?php if($this->session->userdata('liaison')=='True'){ ?>
            <a href="<?php echo base_url() ?>page/org/<?php echo $user_id ?>" class="btn btn-primary btn-block"> Back</a>
          <?php }else{ ?>
            <a href="<?php echo base_url() ?>page/contact/<?php echo $user_id ?>" class="btn btn-primary btn-block"> Back</a>
          <?php } ?>
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary btn-block">Next</button>
        </div>
        
        
      </div>
    </div>


</form>

    </div>

  

  
  

</div>
</div>
