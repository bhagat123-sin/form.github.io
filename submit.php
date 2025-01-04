<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamName = htmlspecialchars($_POST['team-name']);
    $players = htmlspecialchars($_POST['players']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    $data = "Team Name: $teamName\nPlayers: $players\nCity: $city\nState: $state\nEmail: $email\nPhone: $phone\nAddress: $address\n------------------------\n";

    $file = 'submit .txt';

    if (file_put_contents($file, $data, FILE_APPEND) === false) {
        echo "Failed to save data to file.";
    } else {
        echo "Data successfully saved!";
    }
} else {
    echo "Invalid request method.";
}
?>
