<?php 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=FootKit', 'root', '');
} catch (PDOException $e) {
    die('Erreur PDO :' . $e->getMessage());
}
?>