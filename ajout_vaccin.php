<?php
include_once("Connexion.php");

$dateV = $_POST["dateV"];
$prix = $_POST["produit"];
$dateRv = $_POST["dateRV"];
$idUser = $_POST["idUser"];
$idAnimal = $_POST["idAnimal"];


$requete = $db->prepare("INSERT INTO vaccination (DateVaccination, ProduitUtilisee, DateRappelVac, IdUsers, IdAnimal) VALUES (:dateV, :produit, :dateRV, :idUser, :idAnimal)");
$requete->bindParam(":dateV", $dateV,PDO::PARAM_STR);
$requete->bindParam(":produit", $produit,PDO::PARAM_STR);
$requete->bindParam(":dateRV", $dateRv,PDO::PARAM_STR);
$requete->bindParam(":idUser", $idUser,PDO::PARAM_STR);
$requete->bindParam(":idAnimal", $idAnimal,PDO::PARAM_STR);
$requete->execute();

header("Location: index.php");

?>