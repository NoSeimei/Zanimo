<?php

include("Class/animal.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">

<table id="table_id" class="display" name="table">
    <thead>
        <tr>
            <th scope="col">Column 1</th>
            <th scope="col">Column 2</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $Animal = NEW Animal();
    $AllAnimal = $Animal->GetAllAnimal();
    foreach($AllAnimal as $unAnimal)
    {
    
        echo "<tr>
            <td>".$unAnimal->getNom()."</td>
            <td>".$unAnimal->getRobe()."</td>
            <td>".$unAnimal->getEtat()."</td>
            <td>".$unAnimal->getEspece()."</td>
            <td>".$unAnimal->getPoids()."</td>
            <td>".$unAnimal->getDateDeNaissance()."</td>
            <td>".$unAnimal->getNumeroPuce()."</td>
            <td>".$unAnimal->getIdUsers()."</td>
            <td><input type=button value='test'></input></td>
        </tr>";
    
    }
    ?>
        
       
    </tbody>
</table>


    
</body>
    
    <script type="text/javascript" charset="utf8" src="DataTables/datatables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    } );
    </script>
</html>