

<div class="container">
  <div class="row">
  

   <div class="col-md-8 col-md-offset-2 text-center">

    <form class="form-horizontal" action="<?php echo base_url(); ?>page/affliate/<?php echo $user_id ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="email">Which other FOSS Projects, Communities or Organizations are you affiliated with? :<br><small>(À quelles autres organisations FOSS ou projets FOSS êtes-vous affilié?)</small> </label>
</div>

</div>
      <div class="col-md-6 col-md-offset-4">
      <span class="text-danger"><?php echo form_error('affliate'); ?></span>
       
     
          <?php 

            foreach($affliate as $row)
            { 
              echo '<div class="checkbox">';
              echo '<label><input type="checkbox" name="affliate[]" value="'.$row->fossorg_id.'">'.$row->name.'</label>';
              echo '</div>';
            }
            ?>
      
    </div>
     </div>

     <div class="col-md-4 col-md-offset-4 text-center">
    <div class="form-group">
      
      <div class="col-sm-10">
        <div class="col-sm-6">
            <a href="<?php echo base_url() ?>page/interest/<?php echo $user_id ?>" class="btn btn-primary btn-block"> Back</a>
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        
        
      </div>
    </div>
  </div>

</form>

    </div>

  

  
  

</div>
</div>
