<?php

include("Function/Function.php");
include("Class/Users.php");

if (isset($_POST["firstname"]) && (isset($_POST["password"]) == isset($_POST["confirmpassword"])))
	{
		try{ 
		  //on verifie que l'identifiant du client n'existe pas avent de l'inscrire
		  		$login = $_POST["login"];
				$user = new Users();
				$test = $user->CheckUser($login);
				if($test == false)
				{
				$user->setNom($_POST["firstname"]);
				$user->setPrenom($_POST["lastname"]);
				$user->setDateNaiss($_POST["dateN"]);
				$user->setTelephone($_POST["telephone"]);
				$user->setEmail($_POST["mail"]);
				$user->setIdentifiant($_POST["login"]);
				$user->setPassword($_POST["password"]);
				$user->setToken("");
				$user->setIdUserType($_POST["idUserType"]);
				
			  	$user->InsertUser($user);
				header("Location: index.html");
				}else{
					echo "Cet utilisateur existe déjà ! ";
				}
        }
        catch(Exception $ex){
	  
                echo $ex;
          
            }
        }
        ?>