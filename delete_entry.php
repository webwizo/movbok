<?php 

$id = $_GET['id'];

$pdo = require 'connection.php'; 

$id = $_GET['id'];
$stmt = $pdo->query("DELETE FROM contact_entries WHERE id = $id");

header("Location: entries.php");