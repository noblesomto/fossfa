

<div class="container">
  <div class="row">
  

   <div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" action="<?php echo base_url(); ?>page/org/<?php echo $user_id ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <div class="text-center">
      <label for="email">Which Organization do you represent?:<br> <small>(Quelle organisation représentez-vous?)</small> </label>
      <span class="text-danger"><?php echo form_error('organization'); ?></span>
      </div>
       <select class="form-control" name="organization" required="">
        <option value="">Choose an Organization</option>

          <?php 

            foreach($org as $row)
            { 
              echo '<option value="'.$row->org_id.'" title="'.$row->area.', '.$row->city.', '.$row->state.', '.$row->country.'">'.$row->org_name.'</option>';
            }
            ?>
            <option value="Not Listed">Not Listed</option>
        </select>
    </div>

</div>

  <div class="col-md-6 col-md-offset-4">
     <div class="form-group">
    
      <div class="col-sm-8">
        <div class="col-sm-6">
            <a href="<?php echo base_url() ?>page/user/<?php echo $user_id ?>" class="btn btn-primary btn-block"> Back</a>
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
