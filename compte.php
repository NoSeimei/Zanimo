<?php
if(!isset($leClient)){
    $leClient = "";
          $nomC ="";
          $prenomC="";
          $mailC="";
          $identC="";
          $telephoneC="";
}

include('Class/Users.php');
include("Function/Function.php");

if(!isset($_SESSION['nom'])){
	
	$_SESSION['nom']="";
	$_SESSION['prenom']="";
	$_SESSION['tel']="";
	$_SESSION['mail']="";
}

	
		 
		try{ 
            //on selectionne le client qu'on veut modifier ici le client lui même
            $uncli = $_SESSION['leClient2'];
		    $requete = $db->query("SELECT * FROM `users` WHERE Login = $uncli");
		    $requete->setFetchMode(PDO::FETCH_CLASS, 'Users');
		    $client = $requete->fetchAll();


            $leClient = $_SESSION['leClient2'];
            $nomC= $_SESSION['nom2'];
            $prenomC= $_SESSION['prenom2'];
            $mailC= $_SESSION['mail2'];
            $identC= $_SESSION['ident2'];
            $telephoneC= $_SESSION['telephone2'] ;
			//si seul le numero de téléphone est modifier on fais en sorte de modifier seulemetn le téléphone dans la bdd
         if (isset($_POST['phone']) && !isset($_POST['pass2'])){
             
            $phone= $_POST["phone"];
           $request = $db->prepare("UPDATE clients SET Telephone = :Telephone
           WHERE Id_Client= :IdClient");
           $request->execute(array('Telephone'=>$phone,'IdClient'=>$leClient));
           $_SESSION['telephone2'] = $phone;
           $telephoneC= $_SESSION['telephone2'] ;
		 }
		 //ici on vérifie que le mdp est bien renseigné puis on vérifie que les deux mdp soient egaux
         elseif(isset($_POST['pass2']) && isset($_POST['confpass'])){
             $confpass=$_POST['confpass'];
             $passw= $_POST['pass2'];

             if($passw === $confpass){
                $phone= $_POST["phone"];
                $request2 = $db->prepare("UPDATE clients SET Telephone = :Telephone, Password = MD5(:Password)
                WHERE Id_Client= :IdClient");
                $request2->execute(array('Telephone'=>$phone,'Password'=>$passw,'IdClient'=>$leClient));
                $_SESSION['telephone2'] = $phone;
                $telephoneC= $_SESSION['telephone2'] ;
             }
             else{
                echo  " <script>
                    mafonction3();
                </script>";
             }
            
         }
		 }
		 
		
		catch(Exception $ex){
	  
			echo $ex;
	  
		}
?>
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
            <li><a href="#">Accueil</a></li>
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
            <li><a href="#">Vaccination</a></li>
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
      <h3 class="text-center">Mon compte</h3>
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