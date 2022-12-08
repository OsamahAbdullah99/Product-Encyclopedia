<?php
$pdo = new PDO('mysql:host=localhost;dbname=Web_project',
    'root', '12345600');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
