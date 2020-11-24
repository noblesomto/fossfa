

<div class="container">
  <div class="row">


  <form class="form-horizontal" action="<?php echo base_url(); ?>page/interest/<?php echo $user_id ?>" method="post" enctype="multipart/form-data">
 <h4 class="text-center">Interest<br> <small>(L'intérêt)</small></h4>
    <div class="col-md-6 col-md-offset-4">
     
      <div class="form-group">
    <div class="checkbox">
        <label><input type="checkbox" name="policy" value="Yes">Policy <small>(Politique)</small></label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="education" value="Yes">Education <small>(Éducation)</small></label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="research" value="Yes">Research <small>(Recherche)</small></label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="software_development" value="Yes">Software Development <small>(Développement de logiciels)</small></label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="business" value="Yes">Business <small>(Affaires)</small></label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="networking" value="Yes">Networking <small>(La mise en réseau)</small></label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="sysadmin" value="Yes">SysAdmin</label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="training" value="Yes">Training/Capacity-Building/Resource-Centres <br><small>(Centres de formation / renforcement des capacités / ressources)</small></label>
    </div>



    </div>
    </div>

   

    


    <div class="col-md-4 col-md-offset-4 text-center">
      <div class="form-group">
     
      <div class="col-sm-10">
        <div class="col-sm-6">
          <?php if($this->session->userdata('student')=='True'){ ?>
            <a href="<?php echo base_url() ?>page/school/<?php echo $user_id ?>" class="btn btn-primary btn-block"> Back</a>
          <?php }elseif(($this->session->userdata('liaison')=='True')){ ?>
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
    </div>

  </form>
</div>
</div>
