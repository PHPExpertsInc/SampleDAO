<?php
class Entity {
  private $primaryKey;
  public getPrimaryKey() {
    return $this->primaryKey;
  }

  public setPrimaryKey($primaryKey) {
    $this->primaryKey = $primaryKey;
  }
}