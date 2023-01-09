<?php $pdo = require("connection.php");

$id = $_GET['id'];

$name = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $pdo->prepare("UPDATE contact_entries SET fullname=:fullname, phone_number=:phone_number, email_address=:email_address, message=:message, updated_at=:upd WHERE id = $id");

$stmt->execute([
    ':upd' => date('Y-m-d'),
    ':phone_number' => $phone, 
    ':email_address' => $email, 
    ':message' => $message, 
    ':fullname' => $name
]);

header("Location: entries.php");