<?php


class Exercice
{
  private $id, $nom, $desc, $idCreateur;
  
  public function loadFromObject($x) {
    $this->id = $x->ID;
    $this->nom = $x->nom;
    $this->desc = $x->description;
    //$this->idCreateur = $x->IDcreateur;
  }
  
  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }
  
  /**
   * @param mixed $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  
  /**
   * @return mixed
   */
  public function getNom()
  {
    return $this->nom;
  }
  
  /**
   * @param mixed $nom
   */
  public function setNom($nom)
  {
    $this->nom = $nom;
  }
  
  /**
   * @return mixed
   */
  public function getDesc()
  {
    return $this->desc;
  }
  
  /**
   * @param mixed $desc
   */
  public function setDesc($desc)
  {
    $this->desc = $desc;
  }
  
  /**
   * @return mixed
   */
  public function getPartie()
  {
    return $this->partie;
  }
  
  /**
   * @param mixed $partie
   */
  public function setPartie($partie)
  {
    $this->partie = $partie;
  }
  
  /**
   * @return mixed
   */
  public function getType()
  {
    return $this->type;
  }
  
  /**
   * @param mixed $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  
  /**
   * @return mixed
   */
  public function getIdCreateur()
  {
    return $this->idCreateur;
  }
  
  /**
   * @param mixed $idCreateur
   */
  public function setIdCreateur($idCreateur)
  {
    $this->idCreateur = $idCreateur;
  }
  
}
