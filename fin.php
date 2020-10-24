<?php
  include "partials/header.php";
?>

    <section class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col col-md-8">
            <h4 class="text-dark">Paiement OK</h4>
            <br>
<?php  
  $type=$_GET['type'];
  if ($type == 'VISIO'){
?>
  Voici votre lien de connexion visio:
  <hr>
  <p>https://visio/conversation/1247778 ou cliquez <a href="https://www.google.fr/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj23NHd7MrsAhUjDGMBHQbHDPkQFjAAegQIAhAC&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.apps.tachyon%26hl%3Dfr%26gl%3DUS&usg=AOvVaw3pI1cwyUxudNV6Xm_klKel">ici</a></p>

<?php  
  }
  elseif ($type == 'Physique') {
?>
  Votre RDV avec le médécin <b><?=$_GET['med']?></b> est prévu pour <b> <?=$_GET['date']?></b>
  <hr>
  
<?php
}       
  else{
?>
  <hr>
  <p>Vous allez recevoir un appel dans quelques minutes ...</p>
  <p>Patientez SVP</p>
<?php     
  }
?>
            <p class="lead">Merci, et à bientôt </p>
            <p><a href="#" class="btn btn-danger">Telecharger le résumé PDF</a></p>
          </div>
        </div>
        <div class="row">
          <p class="bg-dark text-light"></p>
        </div>
      </div>
    </section>
    
    <?php
    include "partials/jslink.php";
  ?>