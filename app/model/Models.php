<?php
namespace App\model;


use App\Koneksi;
class Models extends Koneksi {
  public function getuser($username, $password) {
    $query = "SELECT * FROM users where username='$username' && password='$password'";
    return $this->connect()->query($query);
  }
}