<?php

$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "E5";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}


$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO traitement (nom, adresse, tel, email, message) VALUES ('$nom', '$adresse', '$tel', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Votre message a été pris en compte.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
