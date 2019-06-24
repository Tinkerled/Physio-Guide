<?php
include_once('./classes/Database.php');
include_once('./classes/Exercice.php');

class OptionDAO
{
  public static function findAllPartie(){
    $db = Database::getInstance();
    $liste = Array();
    
    try{
      $pstmt = $db->prepare("SELECT * FROM partie");
      $pstmt -> execute();
      
      while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
        $part = $result->nom;
        array_push($liste, $part);
      }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
    }
    catch (PDOException $ex){
    }
    return $liste;
  }
  
  public static function findAllType(){
    $db = Database::getInstance();
    $liste = Array();
    
    try{
      $pstmt = $db->prepare("SELECT * FROM types");
      $pstmt -> execute();
      
      while ($result = $pstmt->fetch(PDO::FETCH_OBJ)){
        $type = $result->nom;
        array_push($liste, $type);
      }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
    }
    catch (PDOException $ex){
    }
    return $liste;
  }
}

