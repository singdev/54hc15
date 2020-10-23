<?php 

	$l=[
		1=>['ADA', 'Clinique Saint André','OUI', 'Gényco'],
		2=>['MOUSSAVOU', 'Hopital de NKEMBO','OUI','Cardio'],
		3=>['EDZANG','Clinique Chez les Soeurs','NON', 'Dentiste'],
		4=>['BORIS', 'Clinique Saint André','OUI', 'Gényco'],
		5=>['KENY', 'Hopital de Louis','NON','Généraliste'],
		6=>['CUYA','Clinique Dieu Merci','OUI', 'Cardio'],
		7=>['CHRISTOPHE', 'HOPITAL DE LA CROIX','OUI', 'Pédiatre'],
		8=>['MAVOUNGOU', 'CHU de Libreville','NON','Pédiatre'],
		9=>['EDZO','CHU OWENDO','OUI', 'Dentiste'],
		10=>['KOUBOULOU', 'Clinique Sainte Marie','OUI', 'Gényco'],
		11=>['NGUEMBI', 'HOPITAL DE NKEMBO','NON','Cardio'],
		12=>['PAKA','Clinique Dr. Chambrier','OUI', 'Dentiste']
	];

	$n=0;

	foreach ($l as $i => $value) {
		/*if ($l[$i][0] == $_POST['rech']){*/
		$str = strtolower($l[$i][0]);
		if (strpos(' ' . $str, strtolower($_POST['rech'])) == true){	
			$n++
 
 ?>
 
 <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <a href="rdv.php?nom=<?=$l[$i][0]?>" class="nav-item nav-link">
              <div class="card-header bg-dark text-light text-color"><b>Dr. <?= $l[$i][0]?></b></div>
              </a>
              <ul class="list-group list-group-flush">
                <li class="list-group-item "><?= $l[$i][1]?></li>
              </ul>
              <div class="card-body py-2">
                <div class="d-flex">
                  <div class="d-block font-weight-bold p-1">Disponible:</div>
                  <div class="d-block p-1" dmx-text="Beds"><?= $l[$i][2]?></div>
                  <div class="d-block font-weight-bold p-1">Specialité:</div>
                  <div class="d-block p-1" dmx-text="Baths"><?= $l[$i][3]?></div>
                  
                </div>
              </div>
              
            </div>
          </div>
<?php 
	}
}
?>
<br/>
<div>
	<b>résultats: <?= $n ?></b>
</div>
<?php	
	if ($n==0){
?>
	<div class="row" style="text-align: center!important">
        <div class="col col-md-8">
        <p class="lead"> Aucun Résultat <i class="em em-hospital" aria-role="presentation" aria-label="BIRD"></i></p>
          </div>
        </div>
<?php		
	}
?>