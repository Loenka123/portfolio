<?php
$email = $_GET['email'];
$onderwerp = "Uw email is ontvangen.";
$bericht = "Beste heer/mevrouw,\n\nUw email is ontvangen en wij proberen zo snel mogelijk te reageren!";

if (mail($email, $onderwerp, $bericht)) {
    echo "Email succesvol verzonden.";
} else {
    echo "Er is iets fout gegaan bij het verzenden van de email.";
}
$redirectUrl = "contact.html";
header("Location: " . $redirectUrl);
exit();
?>