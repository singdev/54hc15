<?php
  include "partials/header.php";
?>
    <section class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col col-md-8">
            <h4 class="text-dark">Bienvenu.e.s à SMILE SANTE</h4>
            <p class="lead">Votre consultation ici</p>
          </div>
        </div>
        <div class="row">
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
          <div class="col-12 col-md-6 col-lg-4 mb-4" >
            <div class="card">
              <a href="rdv.php?nom=ADA" class="nav-item nav-link">
                <div class="card-header bg-dark text-light text-color">Dr. ADA</div>
              </a>
              <ul class="list-group list-group-flush">
                <li class="list-group-item ">Hopital de NKEMBO</li>
              </ul>
              <div class="card-body py-2">
                <div class="d-flex">
                  <div class="d-block font-weight-bold p-1">Disponible:</div>
                  <div class="d-block p-1" dmx-text="Beds">Oui</div>
                  <div class="d-block font-weight-bold p-1">Specialité:</div>
                  <div class="d-block p-1" dmx-text="Baths">Génycologie</div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4" >
            <div class="card">
              <a href="rdv.php?nom=LIKOUBO" class="nav-item nav-link">
              <div class="card-header bg-dark text-light text-color">Dr. LIKOUBO</div>
              </a>
              <ul class="list-group list-group-flush">
                <li class="list-group-item ">Clinique Saint André</li>
              </ul>
              <div class="card-body py-2">
                <div class="d-flex">
                  <div class="d-block font-weight-bold p-1">Disponible:</div>
                  <div class="d-block p-1" dmx-text="Beds">Oui</div>
                  <div class="d-block font-weight-bold p-1">Specialité:</div>
                  <div class="d-block p-1" dmx-text="Baths">Cardio</div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4" >
            <div class="card">
              <a href="rdv.php?nom=MOUSSAVOU" class="nav-item nav-link">
              <div class="card-header bg-dark text-light text-color">Dr. MOUSSAVOU</div>
              </a>
              <ul class="list-group list-group-flush">
                <li class="list-group-item ">Clinique Les Soeurs</li>
              </ul>
              <div class="card-body py-2">
                <div class="d-flex">
                  <div class="d-block font-weight-bold p-1">Disponible:</div>
                  <div class="d-block p-1" dmx-text="Beds">Oui</div>
                  <div class="d-block font-weight-bold p-1">Specialité:</div>
                  <div class="d-block p-1" dmx-text="Baths">Dentiste</div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4 text-center" >
            <a href="liste_med.php" class="btn text-center">Voir plus...</a>
          </div>
        </div>
      </div>
    </section>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body></html>
    