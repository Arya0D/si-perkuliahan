<?php

namespace App\model;


use App\Koneksi;

class MahasiswaModel extends Koneksi
{
  public function getAll()
  {
    $query = "SELECT * FROM mahasiswa";
    return $this->connect()->query($query);
  }

  public function getById($id)
  {

    $query = "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'";
    return $this->connect()->query($query);
  }

  public function insert($data)
  {
    $npm = $data['npm'];
    $nama_mahasiswa = $data['nama_mahasiswa'];
    $alamat = $data['alamat'];
    $query = "INSERT into mahasiswa (npm,nama_mahasiswa,alamat) VALUES ('$npm','$nama_mahasiswa','$alamat')";
    $this->connect()->query($query);
  }

  public function update($id, $data)
  {
    $npm = $data['npm'];
    $nama_mahasiswa = $data['nama_mahasiswa'];
    $alamat = $data['alamat'];

    $query = "UPDATE mahasiswa set npm='$npm', nama_mahasiswa='$nama_mahasiswa',alamat='$alamat' WHERE id_mahasiswa='$id' ";
    $this->connect()->query($query);
  }

  public function delete($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa='$id' ";
    $this->connect()->query($query);
  }
}
