<?php
use App\view\components\Components;
use App\Config;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?=Config::url().'/css/output.css' ?>"
  </head>

  <body class="h-full w-full">
    <!-- navbar -->
    <nav class="fixed top-0 left-0 w-full">
      <div class="w-100 flex justify-between items-center px-6 py-4 border border-1 bg-neutral-50 h-[64px]">
        <a href="/" class="text-xl font-semibold">SI-PERKULIAHAN</a>
        <a href="" class="italic font-thin">User</a>
      </div>
    </nav>

    <!-- content -->

    <main class=" w-full mt-[62px] flex ">
      <aside class="h-screen w-1/5 bg-stone-50 border border-2">
        <div class="p-2 sticky top-[64px]">
          <h1 class="text-center text-xl font-semibold">DASHBOARD</h1>
          <ul class="grid gap-2 m-1 relative">
            <li><?php Components::button("Mahasiswa", Config::url()."/../mahasiswa/", "bg-sky-100", "mahasiswa.svg") ?></li>
            <li><?php Components::button("Kelas", Config::url()."/../kelas/") ?></li>
            <li><?php Components::button("Prodi", Config::url()."/../index.php/prodi/") ?></li>
          </ul>
        </div>
      </aside>