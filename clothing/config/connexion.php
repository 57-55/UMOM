
<?php

try {
    $connexion = new PDO("mysql:host=localhost;dbname=umom_clothing", "root", "");
    
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}

catch (Exception $e) {
    $e->getMessage();
}

?>