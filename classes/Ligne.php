<?php


class Ligne
{
  private $programme;
  private $exercice;
  private $place = -1;
  private $nom;
  private $serie;
  private $reps;
  private $intensite;
  private $unite;
  
  public function __construct($exe=NULL)
  {
    if($exe == NULL){
      $this->exercice = new Exercice();
    } else {
      $this->exercice = $exe;
      //$this->nom = $exe->getNom();
    }
    // quoi faire lorsq'on ajoute un exercice
  }
  
  public function setIndex($index){
    $this->place = $index;
  }
  
  /**
   * @return mixed
   */
  public function getProgramme()
  {
    return $this->programme;
  }
  
  /**
   * @param mixed $programme
   */
  public function setProgramme($programme)
  {
    $this->programme = $programme;
  }
  
  /**
   * @return int
   */
  public function getPlace()
  {
    return $this->place;
  }
  
  /**
   * @param int $place
   */
  public function setPlace($place)
  {
    $this->place = $place;
  }
  
  /**
   * @return null
   */
  public function getExercice()
  {
    return $this->exercice;
  }
  
  /**
   * @param null $exercice
   */
  public function setExercice($exercice)
  {
    $this->exercice = $exercice;
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
  public function getSerie()
  {
    return $this->serie;
  }
  
  /**
   * @param mixed $serie
   */
  public function setSerie($serie)
  {
    $this->serie = $serie;
  }
  
  /**
   * @return mixed
   */
  public function getReps()
  {
    return $this->reps;
  }
  
  /**
   * @param mixed $reps
   */
  public function setReps($reps)
  {
    $this->reps = $reps;
  }
  
  /**
   * @return mixed
   */
  public function getIntensite()
  {
    return $this->intensite;
  }
  
  /**
   * @param mixed $intensite
   */
  public function setIntensite($intensite)
  {
    $this->intensite = $intensite;
  }
  
  /**
   * @return mixed
   */
  public function getUnite()
  {
    return $this->unite;
  }
  
  /**
   * @param mixed $unite
   */
  public function setUnite($unite)
  {
    $this->unite = $unite;
  }
  
  
}
