<?php
$email = $_GET['email'];
$onderw = $_GET['onderwerp'];
$beri = $_GET['bericht'];
$onderwerp = "Uw email is ontvangen.";
$bericht = "Beste heer/mevrouw,\n\nUw email is ontvangen en wij proberen zo snel mogelijk te reageren!";

if (mail($email, $onderwerp, $bericht)) {
    echo "Email succesvol verzonden.";
} else {
    echo "Er is iets fout gegaan bij het verzenden van de email.";
}

require_once "../db/db.php";
$query = "INSERT INTO emails (email, onderwerp, bericht) VALUES (:email, :onderw, :beri)";
$statement = $db->prepare($query);
$statement->bindParam(":email", $voornaam);
$statement->bindParam(":onderw", $onderw);
$statement->bindParam(":beri", $beri);
$statement->execute();

$redirectUrl = "index.html";
header("Location: " . $redirectUrl);
exit();
?>