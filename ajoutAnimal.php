<?php
include("Class/animal.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
</head>
<body>
<form id="ajout" name="ajout" action="gestAnim.php" method="POST">
  

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" id="NomAdd" placeholder="Nom">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Robe</label>
      <input type="text" class="form-control"  id="RobeAdd" placeholder="Robe">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Robe</label>
      <input type="text" class="form-control"  id="EtatAdd" placeholder="Etat">
    </div>Nom
  </div>
  <div class="form-row ">
  <div class="form-group col-md-4">
    <label for="inputAddress">Etat</label>
    <input type="text" class="form-control"  id="EspeceAdd" placeholder="Espece">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Espece</label>
    <input type="number" class="form-control"  id="PoidsAdd" placeholder="Poids">
  </div>
  
  
    <div class="form-group col-md-4">
      <label for="inputCity">Poids</label>
      <input type="date" class="form-control"   id="DateDeNaissanceAdd">
    </div>
    </div>

  
    
    
   ?>
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>

</form> 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>
</html>