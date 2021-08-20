<?php
include("Class/UserType.php"); 
$usersType = new UserType();
$usersType = $usersType->GetAllUserType();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Zanimo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
</head>

<body>
    <form class="login" action="signIn.php" method="post">
        <input type="text" placeholder="Nom" name="firstname">
        <input type="text" placeholder="Prénom" name="lastname">
        <input type="date" placeholder="Date de naissance" name="dateN">
        <input type="tel" placeholder="Téléphone" name="telephone">
        <input type="mail" placeholder="Email" name="mail">
        <input type="text" placeholder="Identifiant" name="login">
        <input type="password" placeholder="Mot de passe" name="password">
        <select class="selection-1" name="idUserType">
            <?php foreach ($usersType as $userType) { ?> <option value="<?php echo $userType->getId_TypeUser(); ?>"> <?php echo $userType->getTypeUser(); ?></option>
                <?php } ?>
        </select><br/>
        <button>Inscription</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
</body>

</html>