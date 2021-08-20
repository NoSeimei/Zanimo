<?php

include("Class/animal.php");
if (isset ($_POST['NomAdd']))
{
    {
		try{ 
		  //on verifie que l'identifiant du client n'existe pas avent de l'inscrire
		  		
				$animal = new animal();
				
				$animal->SetNom($_POST["NomAdd"]);
				$animal->SetRobe($_POST["RobeAdd"]);
				$animal->SetEtat($_POST["EtatAdd"]);
				$animal->SetEspece($_POST["EspeceAdd"]);
				$animal->SetPoids($_POST["PoidsAdd"]);
				$animal->SetDateDeNaissance($_POST["DateDeNaissanceAdd"]);
				
			  	$animal->InsertAnimal($animal);
				
        }
        catch(Exception $ex){
	  
                echo $ex;
          
            }
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

</head>
<body>

<table id="table_id" class="display" name="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Robe</th>
            <th scope="col">Etat</th>
            <th scope="col">Espece</th>
            <th scope="col">Poids</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Numero de puce</th>
            <th scope="col">Personnel affilié</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $Animal = NEW Animal();
    $AllAnimal = $Animal->GetAllAnimal();
    foreach($AllAnimal as $unAnimal)
    {
    
        echo "<tr>
            <td scope='row'>".$unAnimal->getNom()."</td>
            <td >".$unAnimal->getRobe()."</td>
            <td >".$unAnimal->getEtat()."</td>
            <td >".$unAnimal->getEspece()."</td>
            <td >".$unAnimal->getPoids()."</td>
            <td >".$unAnimal->getDateDeNaissance()."</td>
            <td >".$unAnimal->getNumeroPuce()."</td>
            <td >".$unAnimal->getIdUsers()."</td>
            
            <td >
            <form id='formMod".$unAnimal->getId()."' name='formMod".$unAnimal->getId()."' action='modificationanimal.php' method='post'>
            <input type='hidden' id='Idan' name='Idan' value='".$unAnimal->getId()."'>
             <input type='Submit' value='modifier' class='btn btn-primary'>
              </form>
              </td>
        </tr>";
    
    }
    ?>
        
       
    </tbody>
</table>
<form id='formMod".$unAnimal->getId()."' name='formMod".$unAnimal->getId()."' action='ajoutanimal.php' method='post'>
            <input type='hidden' id='Idan' name='Idan' value='".$unAnimal->getId()."'>
             <input type='Submit' value='ajouter animal' class='btn btn-primary'>
              </form>
              
              <form id='formMod".$unAnimal->getId()."' name='formMod".$unAnimal->getId()."' action='gestfamille.php' method='post'>
            <input type='hidden' id='Idan' name='Idan' value='".$unAnimal->getId()."'>
             <input type='Submit' value='modifier' class='btn btn-primary'>
              </form>
<script src="js/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    } );
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>

</html>