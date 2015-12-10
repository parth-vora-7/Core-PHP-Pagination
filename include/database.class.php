<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class database {
  protected $dbh = null;
  const DB_NAME = 'php_crud';
  const DB_USER = 'root';
  const DB_PSW = 'nirajbhatt';
  const DB_HOST = 'localhost';
  public function __construct() {
    try {
      $this->dbh = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME, self::DB_USER, self::DB_PSW);
      $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
  }
  
  public function __destruct() {
    $this->dbh = null;
  }
}

?>
