<?php

namespace App\controller;

use App\model\KelasModel;
use App\view\components\Components;

class KelasController extends KelasModel
{
  protected $content;

  public function index() {
    require_once __DIR__ . "/../view/templates/header.php";
    require_once __DIR__ . "/../view/kelas/index.php";
    require_once __DIR__ . "/../view/templates/footer.php";
  }


  public function form() {
    $action = "form/add";
    if (@$_GET['id']) {
      $id = $_GET['id'];
      $data = $this->getById($id);
      $x = $data->fetch_assoc();

      $action = "form/edit";
    }
    $this->content = __DIR__ . "/../view/kelas/kelasForm.php";

    require_once __DIR__ . "/../view/templates/header.php";
    require_once __DIR__ . "/../view/kelas/kelasForm.php";
    require_once __DIR__ . "/../view/templates/footer.php";
  }

  public function show() {
    $data = $this->getAll();
    $no = 1;
    foreach ($data as $value) : ?>
    <tr class="odd:bg-sky-100">
      <td><?= $no ?></td>
      <td><?= $value["nama_kelas"] ?></td>
      <td><?= $value["thn_akademik"] ?></td>
      <td><?= $value["nama_prodi"] ?></td>
      <td class="flex gap-2 justify-center p-1">
        <?php Components::button("Edit", "./form?id=". $value["id_kelas"], "bg-sky-600 text-white") ?>
        <?php Components::button("Hapus", "./delete?id=". $value["id_kelas"], "bg-red-600 text-white") ?>

      </td>
    </tr>
    <?php $no++;
    endforeach;
  }

  public function prodi_option() {
    $data = $this->getProdi();
    $prodi = [];
    if (@$_GET['id']) {
      $n = $this->getById($_GET['id']);
      $f = $n->fetch_assoc();
    }
    foreach ($data as $x) {
      $prodi[$x['id_prodi']] = $x['nama_prodi'];
    }
    return $prodi;
  }

  public function deleteKelas() {
    $id = $_GET['id'];

    $this->delete($id);
    header("location:.");
  }
  public function add() {
    $nama = $_POST['nama_kelas'];
    $thn = $_POST['thn_akademik'];
    $id_prodi = $_POST['id_prodi'];
    $data = [
      "nama_kelas" => $nama,
      "thn_akademik" => $thn,
      "id_prodi" => $id_prodi
    ];
    $this->insert($data);
    header("location:../");
  }

  public function edit() {
    $id = $_POST['id'];
    $nama = $_POST['nama_kelas'];
    $thn = $_POST['thn_akademik'];
    $id_prodi = $_POST['id_prodi'];
    $data = [
      "nama_kelas" => $nama,
      "thn_akademik" => $thn,
      "id_prodi" => $id_prodi
    ];
    $this->update($id, $data);
    header("location:../");
  }
}