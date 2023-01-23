
<?php

function add($image, $name, $price, $description) {

    if(require("connexion.php")) {

        $req = $connexion->prepare("INSERT INTO produits (image, name, price, description) VALUES ($image, $name, $price, $description)");
        
        $req->execute(array($image, $name, $price, $description));

        $req->closeCursor();
    }
}

function display() {

    if(require("connexion.php")) {

        $req = $connexion->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        //$req->closeCursor();
    }
}

function delete($id) {

    if(require("connexion.php")) {

        $req = $connexion->prepare("DELETE FROM produits WHERE id=?");

        $req->execute(array($id));
    }

}

?>