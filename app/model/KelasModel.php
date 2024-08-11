<?php
namespace App\model;


use App\Koneksi;

class KelasModel extends Koneksi
{
  public function getAll() {
    $query = "SELECT * FROM kelas JOIN prodi ON kelas.id_prodi = prodi.id_prodi  ";
    return $this->connect()->query($query);
  }

  public function getById($id) {

    $query = "SELECT * FROM kelas JOIN prodi ON kelas.id_prodi=prodi.id_prodi WHERE id_kelas='$id'";
    return $this->connect()->query($query);

  }

  public function getProdi() {
    $query = "SELECT * FROM prodi";
    return $this->connect()->query($query);
  }


  public function insert($data) {
    $namaKelas = $data["nama_kelas"];
    $thnAkademik = $data["thn_akademik"];
    $idProdi = $data["id_prodi"];

    $query = "INSERT into kelas (nama_kelas,thn_akademik,id_prodi) VALUES ('$namaKelas','$thnAkademik','$idProdi')";
    $this->connect()->query($query);
  }

  public function update($id, $data) {
    $namaKelas = $data["nama_kelas"];
    $thnAkademik = $data["thn_akademik"];
    $idProdi = $data["id_prodi"];

    $query = "UPDATE kelas set nama_kelas='$namaKelas',thn_akademik='$thnAkademik',id_prodi='$idProdi' WHERE id_kelas='$id' ";
    $this->connect()->query($query);
  }

  public function delete($id) {
    $query = "DELETE FROM kelas WHERE id_kelas='$id' ";
    $this->connect()->query($query);
  }
}