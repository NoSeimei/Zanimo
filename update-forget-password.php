<?php
if(isset($_POST['newpassword']) && isset($_POST['confirmnewpassword']) && $_POST['reset_link_token'] && $_POST['email'])
{
include("Class/Users.php"); 
$emailId = $_POST['email'];
// $token = $_POST['reset_link_token'];
$password = md5($_POST['newpassword']);
$user = new Users();
$isExist = $user->UpdateNewPassword($emailId, $password);

if($isExist == true){ ?>
<!doctype html>
<html lang="en">

<head>
    <title>Zanimo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <form class="login" action="index.html" method="post">
        <h2>Votre mot de passe a bien été modifié !</h2>
        <button style="width: 150px;">Se connecter</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
</body>

</html>
<?php
}else{
echo "<p>Something goes wrong. Please try again</p>";
}
}
?>