<?php

namespace App;

use mysqli;

class Koneksi
{
  private $host = "127.0.0.1";
  private $username = "root";
  private $password = "";
  private $dbname = "perkuliahan";

  public function connect()
  {
    $db = new mysqli($this->host, $this->username, $this->password, $this->dbname);

    if ($db->connect_error) {
      die("Koneksi gagal: " . $db->connect_error);
    }

    return $db;
  }
}
