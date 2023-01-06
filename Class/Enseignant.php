<?php
class Enseignant {
  public $id;
  public $nom;
  public $idUe;
}

function __construct($id,$nom, $idUe) {
    $this->id = $id;
    $this->nom = $nom;
    $this->idUe = $idUe;
  }

?>