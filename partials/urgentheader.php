<!DOCTYPE html><html><head>
<meta charset="UTF-8">
<title>SMILE SANTE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src="dmxAppConnect/dmxAppConnect.js"></script>
  <link rel="stylesheet" type="text/css" href="dmxAppConnect/dmxAnimateCSS/animate.min.css">
  <script type="text/javascript" src="dmxAppConnect/dmxAnimateCSS/dmxAnimateCSS.js"></script>
  <script type="text/javascript" src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js"></script>
  <script type="text/javascript" src="dmxAppConnect/dmxFormatter/dmxFormatter.js"></script>
  </head>
  <body is="dmx-app">
    <style type="">
      .bg-dark {
      background-color: #fff500!important;
  }
  .text-color{color:black!important}
  .t{
    background-color: black!important;
  }
  .tt{
    border-color: rgb(27 3 3 / 10%)!important;
  }
  .urgence{
    color:red;
  }
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');

/**Urgence bouton début**/
.urgencebtn a {
  text-decoration: none;
  color: #fff; 
}
.urgencebtn {
  background: #ff0000;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
  width: 50px;
  border-radius: 8px;
  position: fixed;
  /*utilise ce margin pour gerer la position du bouton la première valeur est la marge verticale et la seconde horizontale*/
  margin: 10px 80%;
}
.rouge{
  border-left: 1px solid red;
  border-right: 1px solid red;
  background-color: red;
}
.brouge{
  background-color: red;
  padding:10px;
  border-radius:5px; 
  color:#fff;
}
/**Urgence bouton fin**/
</style>
    <header class="bg-dark text-secondary">
      <div class="container">
        <div class="row">
          <div class="col rouge">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
              <img src="Logov2.jpg" alt="logo" border-radius="10%" height="100px" width="100px">
              <a class="navbar-brand mr-auto ml-auto text-color" href="index">&nbsp &nbsp SMILE SANTE</a>
              <button class="navbar-toggler tt" type="button" data-toggle="collapse" data-target="#navbar1_collapse" aria-controls="navbar1_collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon t"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbar1_collapse">
                <div class="navbar-nav">
                  <a class="nav-item nav-link text-color" href="index.php">ACCUEIL</a>
                  <a class="nav-item nav-link active text-color" href="liste_med.php">Prendre rendez-vous</a>
                  <a class="nav-item nav-link text-color" href="#">Historique</a>
                  <a class="nav-item nav-link brouge text-color urgence" href="urgentliste.php">Urgence</a>
                </div>
              </div>

              
              
            </nav>      </div></div></div></header>
            <div class="urgencebtn">
              <a href="urgentliste.php"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            </div>