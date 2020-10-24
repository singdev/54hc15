<?php
  include "partials/urgentheader.php";
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
          <p class="bg-dark text-light text-color">Médécin: Dr. <?= $_GET['nom'] ?></p>
        </div>
      </div>
    </section>
    <section class="pt-4">
      <div class="container">
        <div class="row pt-4"  key="ListingID">
          
        <form action="urgentpaiement.php" class="form-control text-center" method="post">
          <input type="text" name="nom" hidden="" value="<?= $_GET['nom'] ?>" required>
          
          <label>Numéro de Téléphone</label>
          <input id='tel' type="tel" name="tel" class="form-control" placeholder="+24174851472" required>          
          <label>Nom du patient</label>
          <input id='patient' type="text" name="patient" class="form-control" placeholder="Nom du Patient" required>
          <label>Le motif</label>
          <textarea id="motif" name = "motif" placeholder="motif" class="form-control"  required></textarea>
          <label>Type de consultation</label>
          <select class="form-control" id="type"  name="type">
            <option class="form-control"id="type" name="type">VISIO</option>
            <option class="form-control"id="type" name="type">Appels Numéro vert</option>
            
          </select>
          <label>Assurances</label>
          <select class="form-control" id="assurance" name = "assurance">
            <option class="form-control">...</option>
            <option class="form-control"id="assurance" name = "assurance">AXA</option>
            <option class="form-control"id="assurance" name = "assurance">CNAMGS</option>
          </select>
          <label>Numéro d'Assurance</label>
          <input id='numass' type="text" name="numass" class="form-control" placeholder="">
          
          <input type="submit" class="btn btn-success" name="submit" value="Valider"/>
        </form>
          
          
        </div>
      </div>
    </section>
<?php
  include "partials/jslink.php";
?>
