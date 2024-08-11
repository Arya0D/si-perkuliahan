<?php
namespace App\controller;
use App\view\components\Components;
use App\model\MahasiswaModel;
class MahasiswaController extends MahasiswaModel {
  private $content;
  public function index() {
    $this->content = __DIR__ . "/../view/mahasiswa/Index.php";

    require_once __DIR__ . "/../view/layout.php";
  }
  public function view() {
    require_once $this->content;
  }

  public function form() {
    $action = "form/add";
    if (@$_GET['id']) {
      $id = $_GET['id'];
      $data = $this->getById($id);
      $x = $data->fetch_assoc();
      $action = "form/edit";
    }
    require_once __DIR__ . "/../view/templates/header.php";
    require_once __DIR__."/../view/mahasiswa/mahasiswaForm.php";
    require_once __DIR__ . "/../view/templates/footer.php";
  }

  public function show() {
    $data = $this->getAll();
    $no = 1;
    foreach ($data as $value): ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $value["nama_mahasiswa"] ?></td>
      <td><?= $value["npm"] ?></td>
      <td><?= $value["alamat"] ?></td>
      <td class="flex gap-2 justify-center p-1">
        <?php Components::button("Edit", "./form?id=". $value["id_mahasiswa"], "bg-sky-600 text-white") ?>
        <?php Components::button("Hapus", "./delete?id=". $value["id_mahasiswa"], "bg-red-600 text-white") ?>

      </td>
    </tr>
    <?php $no++; endforeach;
  }



  public function deleteMahasiswa() {
    $id = $_GET['id'];

    $this->delete($id);
    header("location:.");

  }
  public function add() {
    $npm = $_POST['npm'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $alamat = $_POST['alamat'];
    $data = [
      "npm" => $npm,
      "nama_mahasiswa" => $nama_mahasiswa,
      "alamat" => $alamat
    ];
    $this->insert($data);
    header("location:../");
  }

  public function edit() {
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $alamat = $_POST['alamat'];
    $data = [
      "npm" => $npm,
      "nama_mahasiswa" => $nama_mahasiswa,
      "alamat" => $alamat
    ];

    $this->update($id, $data);
    header("location:../");
  }
}