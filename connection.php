<?php
$pdo = null;

$host = "127.0.0.1";
$database = "learnphpdb";
$username = "root";
$password = "secret";
$charset = "utf8mb4";

$dsn = "mysql:host=" . $host . ";dbname=" . $database . ";charset=" . $charset;
// $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
);

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    return $pdo;
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
// $stmt = $pdo->query('SELECT * FROM contact_entries');
// print_r($stmt);
// while ($row = $stmt->fetch())
// {
//     echo $row['fullname'] . " (" . $row['email_address'] . ")<br>";
// }