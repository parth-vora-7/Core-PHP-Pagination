<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class user extends database {
  public function getUsers($current_page = 1, $rec_per_page = 3) {
    $limitFrom = ($current_page - 1) * $rec_per_page; 
    try {
      $stmt = $this->dbh->prepare("SELECT * FROM tbluser LIMIT :limitFrom, :limitTo");
      $stmt->bindValue(':limitFrom', (int)$limitFrom, PDO::PARAM_INT);
      $stmt->bindValue(':limitTo', (int)$rec_per_page, PDO::PARAM_INT);
      $stmt->execute();
      return $results = $stmt->fetchAll();
    } catch (Exception $e) {
      die($e);
    }
  }
  
  public function paginate() {
    try {
      $stmt = $this->dbh->prepare("SELECT count(*) as total FROM tbluser");
      $stmt->execute();
      $result = $stmt->fetch();
      return $result['total'];
    } catch (Exception $e) {
      die($e);
    }
  }

  public function createUser($fname, $lname, $address, $phone, $email) {
    try {
      $stmt = $this->dbh->prepare("INSERT INTO tbluser (first_name, last_name, address, phone_no, email) VALUES (:fname, :lname, :address, :phone, :email)");
      $stmt->bindParam(':fname', $fname);
      $stmt->bindParam(':lname', $lname);
      $stmt->bindParam(':address', $address);
      $stmt->bindParam(':phone', $phone);
      $stmt->bindParam(':email', $email);
      $stmt->execute();
    } catch (Exception $e) {
      die($e);
    }
  }
}

?>
