<?php
namespace App\model;


use App\Koneksi;

class ProdiModel extends Koneksi
{
  public function getAll() {
    $query = "SELECT * FROM prodi";
    return $this->connect()->query($query);
  }

  public function getById($id) {

    $query = "SELECT * FROM prodi WHERE id_prodi='$id'";
    return $this->connect()->query($query);

  }

  public function insert($namaProdi) {
    $query = "INSERT into prodi (nama_prodi) VALUES ('$namaProdi')";
    $this->connect()->query($query);
  }

  public function update($id,$data) {
    $query = "UPDATE prodi set nama_prodi='$data' WHERE id_prodi='$id' ";
    $this->connect()->query($query);
  }

  public function delete($id) {
    $query = "DELETE FROM prodi WHERE id_prodi='$id' ";
    $this->connect()->query($query);
  }
}