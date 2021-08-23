<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Réinitialisation du Mot de passe</title>
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
include("Class/Users.php"); 
if($_GET['key'] && $_GET['token'])
{
$email = $_GET['key'];
$token = $_GET['token'];
$user = new Users();
$theUser = $user->CheckResetPassword($email, $token);
if ($theUser == true) { ?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

<form class="login" action="update-forget-password.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>">
<input type="hidden" name="reset_link_token" value="<?php echo $token;?>">
<h1>Zanimo</h1>
        <input type="password" placeholder="Nouveau mot de passe" name="newpassword">
        <input type="password" placeholder="Confirmation du mot de passe" name="confirmnewpassword">
        <button>Connexion</button>
</form>
<?php }  
}
?>

</body>
</html>