<?php
class Dao {
   private $db;
   public function __construct(PDO $db) {
     $this->db = $db;
   }

   public function getDB() {
      return $this->db;
   }
}