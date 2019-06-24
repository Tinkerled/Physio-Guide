<?php

include_once('./classes/Database.php');
include_once('./classes/Exercice.php');

class ExerciceDAO
{
  public static function find($id){
        $db = Database::getInstance();
    
        try{
          $pstmt = $db->prepare("SELECT * FROM exercice WHERE ID = :x");
          $pstmt->execute(array(':x' => $id));
          $result = $pstmt->fetch(PDO::FETCH_OBJ);
      
          if($result){
            $exe = new Exercice();
            $exe->loadFromObject($result);
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            return $exe;
        
          }
    }
    catch (PDOException $ex){
    }
    return NULL;
  }
  
  public static function findAll(){
    $db = Database::getInstance();
    $liste = Array();
    
    try{
      $pstmt = $db->prepare("SELECT * FROM exercice");
      $pstmt -> execute();
      
      while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
        $exe = new Exercice();
        $exe -> loadFromObject($result);
        array_push($liste, $exe);
      }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
    }
    catch (PDOException $ex){
    }
    return $liste;
  }
  
  public static function create($exercice){
    $db = Database::getInstance();
    $n = 0;
    
    try{
      $pstmt = $db->prepare("INSERT INTO exercice(nom, description)"
      ."VALUES(:n, :d)");
      
      $n = $pstmt->execute(array(
        //':i' => $exercice->getId(),
        ':n' => $exercice->getNom(),
        ':d' => $exercice->getDesc(),
        //':v' => $exercice->getIdCreateur(),
      ));
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
    }
    catch (PDOException $ex){
    }
    return $n;
  }
  
  public static function delete($exercice){
    $db = Database::getInstance();
    $n = 0;
    
    try{
      $pstmt = $db->prepare("DELETE FROM exercice WHERE ID=:id");
      $n = $pstmt->execute(array(':id' => $exercice->getId()));
      
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
    }
    catch (PDOException $ex){
    }
    return $n;
  }
  
  public static function deleteByID($id){
    $exe = new Exercice();
    $exe -> setId($id);
    self::delete($exe);
  }
  
  public static function update($exercice){
    $db = Database::getInstance();
    $n = 0;
    
    try{
      $pstmt = $db->prepare
      ("UPDATE exercice SET ID=:i, nom=:n, description=:d WHERE ID=:id)");
  
      $n = $pstmt->execute(array(
                                  ':i' => $exercice->getId(),
                                  ':n' => $exercice->getNom(),
                                  ':d' => $exercice->getDesc(),
                                  ':id' => $exercice->getId()
      ));
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
    }
    catch (PDOException $ex){
    }
    return $n;
  }
}
























