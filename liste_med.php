<?php
  include "partials/header.php";
?>
    <section class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col col-md-8">
            <h4 class="text-dark">Choisissez votre médécin</h4>
            <p class="lead"> </p>
          </div>
        </div>
        <div class="row center" >
          <div class="col">
            <input type="text" name="rech" class="form-control">
          </div>
          <div class="col">
            <button class="btn btn-custom">Rechercher le Médecin</button>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-4">
      <div class="container">
        <div class="row pt-4"  key="ListingID">
          <?php
            include "medecins.php"
          ?>

          
          
        </div>
      </div>
    </section>
    <?php
  include "partials/jslink.php";
?>
