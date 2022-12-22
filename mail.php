<?php $pdo = require("connection.php");

$name = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// $stmt = $pdo->prepare("INSERT INTO contact_entries (fullname, phone_number, email_address, message, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?)");

// $stmt->execute([$name, $phone, $email, $message, date('Y-m-d'), date('Y-m-d')]);

$stmt = $pdo->prepare("INSERT INTO contact_entries (fullname, phone_number, email_address, message, created_at, updated_at) VALUES(:fullname, :phone_number, :email_address, :message, :cre, :upd)");

$stmt->execute([
    ':upd' => date('Y-m-d'),
    ':cre' => date('Y-m-d'), 
    ':phone_number' => $phone, 
    ':email_address' => $email, 
    ':message' => $message, 
    ':fullname' => $name
]);

header("Location: thankyou.php");

?>

