<?php
$email = $_GET['email'];
$onderw = $_GET['onderwerp'];
$beri = $_GET['bericht'];
$onderwerp = "Uw email is ontvangen.";
$bericht = "Beste heer/mevrouw,\n\nUw email is ontvangen en wij proberen zo snel mogelijk te reageren!";

if (mail($email, $onderwerp, $bericht)) {
    echo "Email succesvol verzonden.";
    $redirectUrl = "index.html";
    header("Location: " . $redirectUrl);
    exit();
} else {
    echo "Er is iets fout gegaan bij het verzenden van de email.";
    exit();
}
?>