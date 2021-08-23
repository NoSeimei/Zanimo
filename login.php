<?php
include("Class/Users.php");
//include("Class/Connexion.php");


if (isset($_POST["login"]) && isset($_POST["password"])) {

  $user = $_POST["login"];
  $pass = $_POST["password"];

	  //on test la connexion du user
    $Users = new Users();
    $theUser = $Users->GetAllUser($user, $pass);
      if ($theUser == true) {
		// $_SESSION['identAd']=$theUser->getLogin();

        header("Location: accueil.php");
      } 

      else {
        echo"test";

      }
}
?>