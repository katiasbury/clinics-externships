<?php

  class Supervisor extends User {
    public $username;

    public function __construct($username) {
      $this->programs = ["program 1","program 2"];
    }

    public function getPrograms(){
      return $this->programs;
    }
  }

 ?>
