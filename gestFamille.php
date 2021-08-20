<?php

include("Class/famille.php");
if (isset ($_POST['NomAdd']))
{
    {
		try{ 
		  //on verifie que l'identifiant du client n'existe pas avent de l'inscrire
		  		
				
				$Famille = new Famille();
				
				$Famille->SetNom($_POST["Nom"]);
				$Famille->SetNum1($_POST["Num1"]);
				$Famille->SetNum2($_POST["Num2"]);
				$Famille->SetEmail($_POST["Email"]);
				$Famille->SetAdresse($_POST["Adresse"]);
				$Famille->SetCodePostal($_POST["CodePostal"]);
				
			  	$Famille->InsertFamille($anFamilleimal);
				
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
            <th scope="col">Num1</th>
            <th scope="col">Num2</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">CodePostal</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $Famille = NEW Famille();
    $AllFamille = $Famille->GetAllFamille();
    foreach($AllFamille as $unFamille)
    {
    
        echo "<tr>
            <td scope='row'>".$unFamille->getNom()."</td>
            <td >".$unFamille->getNom()."</td>
            <td >".$unFamille->getNum1()."</td>
            <td >".$unFamille->getEmail()."</td>
            <td >".$unFamille->getAdresse()."</td>
            <td >".$unFamille->getCodePostal()."</td>
            
            <td >
            <form id='formMod".$unFamille->getId()."' name='formMod".$unFamille->getId()."' action='modificationanimal.php' method='post'>
            <input type='hidden' id='Idan' name='Idan' value='".$unFamille->getId()."'>
             <input type='Submit' value='modifier' class='btn btn-primary'>
              </form>
              </td>
        </tr>";
    
    }
    ?>
        
       
    </tbody>
</table>
<form id='formMod".$unAnimal->getId()."' name='formMod".$unAnimal->getId()."' action='addfamille.php' method='post'>
            <input type='hidden' id='Idan' name='Idan' value='".$unAnimal->getId()."'>
             <input type='Submit' value='Ajouter une famille' class='btn btn-primary'>
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