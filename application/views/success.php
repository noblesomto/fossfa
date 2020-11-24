

<div class="container">
  <div class="row">
  
<?php if($this->session->userdata('mailing_list')=="Yes"){ ?>
   <div class="col-md-8 col-md-offset-2">

   <div class="text-center">
     <h4>Thank You for your continued interest in FOSSFA </h4>
	<h5>You have successfully refreshed your data with us</h5>
   </div>
<div class="small-space"></div>
   <div class="text-center">
     <h4>Merci de l'intérêt que vous portez à FOSSFA</h4>
	<h5>Vous avez actualisé avec succès vos données avec nous</h5>
   </div>

    </div>

  <?php }else{ ?>

<div class="col-md-8 col-md-offset-2">

   <div class="text-center">
     <h4>Thank you for your interest in FOSSFA </h4>
  <h5>You have successfully submitted the registration forms</h5>
   </div>
<div class="small-space"></div>
   <div class="text-center">
     <h4>Merci de votre intérêt pour FOSSFA</h4>
  <h5>Vous avez soumis avec succès les formulaires d'inscription</h5>
   </div>

    </div>
  
  <?php } ?>

</div>
</div>
