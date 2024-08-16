<?php
use App\view\components\Components;



$component = new Components();
?>

<div class="w-screen flex p-3 justify-center">
  <div class=" w-[700px] h-fit p-4 border border-1 rounded-md shadow-lg ">
    <h1 class="text-sky-700 text-3xl font-semibold">Mahasiswa</h1>
    <a href="./form"><button class="bg-sky-600 text-white my-3 p-2 rounded shadow">Tambah Mahasiswa</button></a>
    <table class="border border-2 w-full text-center">
      <tr class="bg-sky-400 font-semibold text-white">
        <td>No.</td>
        <td>Nama</td>
        <td>NPM</td>
        <td>Alamat</td>
        <td>Menu</td>
      </tr>
      <?php $this->show() ?>

    </table>
  </div>

</div>