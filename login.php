<?php
include("Class/Users.php");
//include("Class/Connexion.php");


if (isset($_POST["login"]) && isset($_POST["password"])) {

  $user = $_POST["login"];
  $pass = $_POST["password"];

    
  try {
	  //on test la connexion du user
    $Users = new Users();
    $allUser = $Users->GetAllUser();
    foreach ($allUser as $theUser) {
		//si il se connecte on initialise la varible de session sinon on l'averti
      if ($theUser->getLogin() === $user && MD5($theUser->getPassword()) === $pass) {
		$_SESSION['identAd']=$theUser->getLogin();

        header("Location: test.php");
        break;
      } 

      else {

        echo"test";
    //   echo  " <script>
    //             window.onload = function() 
    //               {
    //                 mafonction();
    //               }; 
    //           </script>";
      }
    }
  } catch (Exception $ex) {

    echo $ex;
  }
}
?>