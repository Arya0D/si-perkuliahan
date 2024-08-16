<?php
namespace App\controller;

use App\model\ProdiModel;
use App\view\components\Components;

class ProdiController extends ProdiModel {
  private $content;
  public function index() {
    require_once __DIR__ . "/../view/templates/header.php";
    require_once __DIR__ . "/../view/prodi/index.php";
    require_once __DIR__ . "/../view/templates/footer.php";
  }
   function form() {
    $action = "form/add";
    if (@$_GET['id']) {
      $id = $_GET['id'];
      $data = $this->getById($id);
      $x = $data->fetch_assoc();
      $action = "form/edit";
    }
    require_once __DIR__ . "/../view/templates/header.php";
    require_once __DIR__ . "/../view/prodi/prodiForm.php";
    require_once __DIR__ . "/../view/templates/footer.php";
  }

  public function show() {
    $data = $this->getAll();
    foreach ($data as $value): ?>
    <tr class="odd:bg-sky-100">
      <td><?= $value["id_prodi"] ?></td>
      <td><?= $value["nama_prodi"] ?></td>
      <td class="flex gap-2 justify-center p-1">
        <?php Components::button("Edit", "./form?id=". $value["id_prodi"], "bg-sky-600 text-white") ?>
        <?php Components::button("Hapus", "./delete?id=". $value["id_prodi"], "bg-red-600 text-white") ?>

      </td>
    </tr>
    <?php endforeach;
  }

  public function deleteProdi() {
    $id = $_GET['id'];
    header("location:.");

    $this->delete($id);

  }
  public function add() {
    $data = $_POST['namaProdi'];
    $this->insert($data);
    header("location:../");
  }

  public function edit() {
    $id = $_POST['id'];
    $data = $_POST['namaProdi'];
    $this->update($id, $data);
    header("location:../");
  }
}