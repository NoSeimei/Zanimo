<?php

use PHPMailer\PHPMailer\PHPMailer;
include("Class/Users.php");
include("PHPMailer-master/src/PHPMailer.php");
include("PHPMailer-master/src/SMTP.php");
include("PHPMailer-master/src/Exception.php");

if(isset($_POST['email']))
{
    $myEmail = "lebeauemmanuelcore2@gmail.com";
    $passW = "Dark_Rise974";


    $emailId = $_POST['email'];
    $Users = new Users();
    $isMailCorrect = $Users->CheckMail($emailId);
 
  if($isMailCorrect == true)
  {
     
     $token = md5($emailId).rand(10,9999);
 
    //  $expFormat = mktime(
    //  date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
    //  );
 
    // $expDate = date("Y-m-d H:i:s",$expFormat);
 
   $update = mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    $link = "<a href='http://localhost/Zanimo/reset-password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = $myEmail;
    // GMAIL password
    $mail->Password = $passW;
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='Zanimo@gmail.com';
    $mail->FromName='Zanimo';
    $mail->AddAddress($emailId);
    $mail->Subject  =  'Mot de passe oublié';
    $mail->IsHTML(true);
    $mail->Body    = 'Cliquez sur ce lien pour changer votre mot de passe '.$link.'';
    if($mail->Send())
    {
      include("resetpasswordsended.html");
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Votre email n'existe pas.";
  }
}
?>