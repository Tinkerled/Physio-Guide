<?php

require_once('./Config.php');

class Database
{
  private static $instance = NULL;
  
  private function __construct()
  {
  }
  
  public static function getInstance()
  {
    if (self::$instance == NULL)
      try {
        self::$instance = new PDO(
        "mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME . "",
        Config::DB_USER,
        Config::DB_PWD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
      } catch (PDOException $ex) {
        self::$instance = NULL;
      }
    return self::$instance;
  }
  
  public static function close()
  {
    self::$instance = NULL;
  }
}
