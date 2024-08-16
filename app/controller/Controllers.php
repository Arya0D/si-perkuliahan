<?php

namespace App\controller;
use App\model\Models;

class Controllers extends Models
{
  private $content;
  public function index() {
    $this->content = __DIR__ . "/../view/dashboard.php";
    require_once __DIR__ . "/../view/layout.php";
  }

  public function login() {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      require_once __DIR__ . "/../view/login.php";
    } else {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $data = $this->getuser($username, $password);
      $x = $data->fetch_assoc();
      if (mysqli_num_rows($data) != 0 && $username === $x['username'] && $password === $x['password']) {
        session_start();
        $_SESSION['login'] = [
          "username" => $x['username'],
          "role" => $x['role']
        ];
        header('location:/');
      } else {
        if (@$_POST) {
          $x = "password atau username salah";
        }
        require_once __DIR__ . "/../view/login.php";
      }
    }
  }
  public function logout() {
    session_start();
    session_destroy();
    header("location:/");
  }
  public function view() {
    require_once $this->content;
  }
}