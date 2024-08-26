<?php
use App\view\components\Components;



$component = new Components();
?>

<div class="w-screen flex p-3 justify-center">
  <div class=" w-full h-fit p-4 border border-1 rounded-md shadow-lg">
    <h1 class="text-sky-700 text-3xl font-semibold">Mahasiswa</h1>
    <a href="./form"><button class="bg-sky-600 text-white my-3 p-2 rounded shadow">Tambah Mahasiswa</button></a>
    <div class="w-full overflow-scroll">

      <table class="table-xs md:table-md border border-2 text-center w-[500px] md:w-full">
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