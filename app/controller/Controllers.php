<?php

namespace App\controller;


class Controllers
{
private $content;
  public function index() {
    $this->content = __DIR__ . "/../view/dashboard.php";
    require_once __DIR__ . "/../view/layout.php";
  }

  public function view() {
    require_once $this->content;
  }
}