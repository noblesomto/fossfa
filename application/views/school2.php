

<div class="container">
  <div class="row">

<?= $this->session->flashdata('msg'); ?>


  <form class="form-horizontal" action="<?php echo base_url(); ?>page/school2/<?php echo $user_id ?>/<?php echo $sch_id ?>" method="post" enctype="multipart/form-data">

    <div class="col-md-8 col-md-offset-2">

     
 
      <div class="form-group">
      <label class="control-label col-sm-3" for="email">Name of School<br><small>(Le nom de l'école)</small>:</label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('sch_name'); ?></span>
         <h4><?= $school['sch_name']; ?> </h4>

        <input type="hidden" class="form-control" placeholder="" name="sch_id" readonly="" required="" value="<?php echo $school['sch_id'] ?>">
      </div>
    </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3">Your Faculty: <br><small>(Votre faculté)</small></label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('faculty'); ?></span>
        <input type="text" class="form-control" placeholder="" name="faculty" required="" value="<?php echo   $this->session->userdata('faculty') ?>">
      </div>
    </div>
    </div>

     <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3">Your Department:<br><small>(Votre département)</small></label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('department'); ?></span>
        <input type="text" class="form-control" placeholder="" name="department" required=""  value="<?php echo   $this->session->userdata('department') ?>">
      </div>
    </div>
    </div>

     <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
         <span class="text-danger"><?php echo form_error('reg_id'); ?></span>
      <label class="control-label col-sm-3">Registration Number: <br><small>(Numéro d'enregistrement)</small></label>
      <div class="col-sm-9">
       
        <input type="text" class="form-control" placeholder="" name="reg_id" required=""  value="<?php echo   $this->session->userdata('reg_id') ?>">
      </div>
    </div>
    </div>

    



    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
      
     <div class="col-sm-10">
        <div class="col-sm-6">
           <a href="<?php echo base_url() ?>page/school/<?php echo $user_id ?>" class="btn btn-primary btn-block"> Back</a>
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary btn-block">Next</button>
        </div>
        
        
      </div>
    </div>
    </div>


  </form>
</div>
</div>
