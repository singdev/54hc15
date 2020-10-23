<?php
  include "partials/header.php";
?>
    <section class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col col-md-8">
            <h4 class="text-dark">Resultat de la recherche</h4>
            <p class="lead"> </p>
          </div>
        </div>
        <form action="resultat.php" method="post">
        <div class="row">
          <div class="col">
            <input type="text" name="rech" class="form-control">
          </div>
          <div class="col">
            <button class="btn btn-custom">Rechercher le Médecin</button>
          </div>
        </div>
        </form>
      </div>
    </section>
    <section class="pt-4">
      <div class="container">
        <div class="row pt-4"  key="ListingID">
          <?php
            
            include "rech.php"
          ?>

          
          
        </div>
      </div>
    </section>
    <?php
  include "partials/jslink.php";
?>
