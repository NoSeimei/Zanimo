
<!DOCTYPE html>

<html>
  <head>
    <title>Zanimo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="green">Zanimo</span></a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li><a href="accueil.php">Accueil</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Item 1</a></li>
                <li class="active"><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li class="divider"></li>
                <li><a href="#">All Items</a></li>
              </ul>
            </li>
            <li class="active"><a href="vaccination.php">Vaccination</a></li>
            <li><a href="#">License</a></li>
            <li class="active"><a href="compte.php">Mon compte</a></li>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <h3 class="text-center">Wild Nature Charity &amp; Urgent Program</h3>
    <!-- Thumbnails -->
    <div class="container thumbs">
     
    <!-- Content -->
    <div class="container">
      <h3 class="text-center">Ajouter une vaccination</h3>
	  <form class="login" action="signIn.php" method="post">
        <input type="text" placeholder="Nom" name="firstname">
        <input type="text" placeholder="Prénom" name="lastname">
        <input type="date" placeholder="Date de naissance" name="dateN">
        <input type="tel" placeholder="Téléphone" name="telephone">
        <input type="mail" placeholder="Email" name="mail">
        <input type="text" placeholder="Identifiant" name="login">
        <input type="password" placeholder="Ancien Mot de passe" name="password">
		<input type="password" placeholder="Nouveau Mot de passe" name="password">
		<br/>
        <button>Enregistrer</button> 
    </form>
    <button><p>Voir liste Vaccination</p></button>
	</div><!-- End Content -->
    <!-- Footer -->
    <div class="footer text-center">
        <p>&copy; 2021 Zanimo. All Rights Reserved.</p>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
  </body>
</html>