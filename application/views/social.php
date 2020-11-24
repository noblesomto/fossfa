

<div class="container">
  <div class="row">


  <form class="form-horizontal" action="<?php echo base_url(); ?>page/social/<?php echo $user_id ?>" method="post" enctype="multipart/form-data">

    <div class="col-md-8 col-md-offset-2">
      <h4 class="text-center">Username for Social Media accounts</h4>
      <div class="form-group">
      <label class="control-label col-sm-3" for="email">Twitter:</label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('twitter'); ?></span>
        <input type="text" class="form-control" placeholder="" name="twitter" value="<?php echo set_value('twitter'); ?>">
      </div>
    </div>
    </div>

   

    <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3">Skype:</label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('skype'); ?></span>
        <input type="text" class="form-control" placeholder="" name="skype"  value="<?php echo set_value('skype'); ?>">
      </div>
    </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3" for="email">Linkedin:</label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('linkedin'); ?></span>
        <input type="text" class="form-control" placeholder="" name="linkedin" value="<?php echo set_value('linkedin'); ?>">
      </div>
    </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3" for="email">Reddit:</label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('reddit'); ?></span>
        <input type="text" class="form-control" placeholder="" name="reddit" value="<?php echo set_value('reddit'); ?>">
      </div>
    </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3">Telegram:</label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('telegram'); ?></span>
        <input type="text" class="form-control" placeholder="" name="telegram" value="<?php echo set_value('telegram'); ?>">
      </div>
    </div>
    </div>


    <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3">IRC:</label>
      <div class="col-sm-9">
        <span class="text-danger"><?php echo form_error('irc'); ?></span>
        <input type="text" class="form-control" placeholder="" name="irc" value="<?php echo set_value('irc'); ?>">
      </div>
    </div>
    </div>

    


    <div class="col-md-8 col-md-offset-2">
      <div class="form-group">
      <label class="control-label col-sm-3"></label>
      <div class="col-sm-9">
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </div>
    </div>
    </div>


  </form>
</div>
</div>
