<?php
  include "partials/header.php";
?>

    <section class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col col-md-8">
            <h4 class="text-dark">Prendre Rendez-vous</h4>
            <p class="lead">Remplissez le formulaire svp </p>

          </div>
        </div>
        <div class="row">
          <p class="bg-dark text-light">Médécin: Dr. ADA</p>
        </div>
      </div>
    </section>
    <section class="pt-4">
      <div class="container">
        <div class="row pt-4"  key="ListingID">
          
        <form action="paiement.php" class="form-control text-center">
          <label>Choisissez la date</label>
          <select class="form-control">
            <option class="form-control">Lun 24 Dec,13-15h</option>
            <option class="form-control">Mar 25 Dec,10-12h</option>
          </select>
          <label>Nom du patient</label>
          <input type="" name="" class="form-control" placeholder="Nom du Patient">
          <label>Le motif</label>
          <textarea value="motif" class="form-control"></textarea>
          <label>Type de consultation</label>
          <select class="form-control">
            <option class="form-control">VISIO</option>
            <option class="form-control">Physique</option>
          </select>
          <label>Assurance - Numéro</label>
          <input type="" name="" class="form-control" placeholder="CNAMGS, ASSINCO, NSIA....">
          
          <button type="submit" class="btn btn-success" name="">Valider</button>
        </form>
          
          
        </div>
      </div>
    </section>
<?php
  include "partials/jslink.php";
?>
