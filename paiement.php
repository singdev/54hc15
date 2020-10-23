<?php
  
  include "partials/header.php";
?>


    <section class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col col-md-8">
            <h4 class="text-dark">Recap et paiement</h4>
            <p class="lead">Véririfiez avant de valider svp. </p>

          </div>
        </div>
        <div class="row">
          <p class="bg-dark text-light text-color">Médécin: Dr. <?= $_POST['nom'] ?></p>
        </div>
      </div>
    </section>
    <section class="pt-4">
      <div class="container">
        <div class="row pt-4"  key="ListingID">
          
          <label class="form-control">RDV pour le: <b><?=$_POST['date']?></b></label>
          <label class="form-control">IDENTIFIANT DU PATIENT:<b> 12400</b></label>
          <label class="form-control">Nom du patient:<b><?=$_POST['patient']?></b></label>
          <label class="form-control">Le motif: <b><?=$_POST['motif']?></b></label>
          <label class="form-control">Type de consultation: <b><?=$_POST['type']?></b> </label>
          <label class="form-control">Assurance - Numéro: <b><?=$_POST['assurance']?></b></label>
          <br/>

          <label class="form-control">Montant de la consultation: <b>1000 F. CFA</b></label>
		  <div class="form-control">
		  <label>Mode de paiement</label>
		  </div> 		
			<div class="form-control">
			<img src="Airtel.jpg" height="60px" width="70px">
			<label for="vehicle1">Airtel Money</label><br>
			<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
			</div>
			<div class="form-control">
			<img src="mobicash.png" height="60px" width="70px">
			<label for="vehicle2"> Mobicash</label><br>
			<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
			</div>
			<div class="form-control">
			<img src="visa.png" height="60px" width="70px">
			<label for="vehicle1"> VISA</label><br>
			<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
			</div>
			<div class=" form-control text-center">

			<a href="fin.php?<?=$_POST['type']?>" class="btn btn-success">VALIDER LE PAIEMENT</a>
			<!--<button type="submit" class="btn btn-success">Valider</button>	-->
	        </div>
        </div>
      </div>
    </section>
    <?php
	  include "partials/jslink.php";
	?>
