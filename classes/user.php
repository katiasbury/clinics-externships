<?php

  class User {
    public $username;

    public function __construct($username) {
      $this->username = $username;
    }

    public function getRole(){
      if($this->username == "kasbury"){
        $this->role = "Super awesome admin";
      } else {
        $this->role = "Plain ol' nobody";
      }
      return $this->role;
    }
  }

 ?>
