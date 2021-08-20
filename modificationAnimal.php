
<?php

echo $_POST['Idan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
</head>
<body>
<form>
      
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Robe</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Robe">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Etat</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Etat">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Espece</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Espece">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Poids</label>
      <input type="number" class="form-control" id="Poids">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Date de naissance</label>
      <input type="date" class="form-control" id="Date"placeholder="Espece">
    </div>
    
   
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>

</form> 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>
</html>