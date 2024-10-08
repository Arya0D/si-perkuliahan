<?php
use App\view\components\Components;
use App\Config;
session_start();
if (!isset($_SESSION['login'])) {
  header("location: /login/");
}
$page = $_SERVER['PATH_INFO'];
$user = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?=Config::url().'/css/output.css' ?>"
  </head>

  <body class="h-screen w-full bg-slate-50">
    <nav class="fixed top-0 left-0 w-full z-10">
      <div class="w-screen flex justify-between items-center px-6 py-4 border border-1 bg-neutral-50 h-[64px]">
        <a href="/" class="text-xl font-semibold">SI-PERKULIAHAN</a>
        <div class="dropdown dropdown-end">
          <button href="" class="text-sky-300 font-bold" role="button"><?= $user['username']; ?></button>
          <ul class="dropdown-content menu bg-base-100 rounded-box z-[1] w-fit p-2 shadow">
            <li class="">
              <a href="../logout/">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class=" w-full mt-[62px] flex ">
      <aside class="hidden md:block h-screen w-1/5 bg-stone-50 border border-2">
        <div class="p-2 sticky top-[64px]">
          <h1 class="text-center text-xl font-semibold">DASHBOARD</h1>
          <ul class="grid gap-2 m-1 relative">
            <li id="menu-mahasiswa"><?php
              $class = strpos($page, "/mahasiswa/") === 0 ? "bg-sky-500 text-white" : null;
              Components::button("Mahasiswa", Config::url()."/../mahasiswa/", $class, "mahasiswa.svg");
              ?></li>
            <li id="menu-kelas"><?php
              $class = strpos($page, "/kelas/") === 0 ? "bg-sky-500 text-white" : null;
              Components::button("kelas", Config::url()."/../kelas/", $class, "mahasiswa.svg");
              ?></li>
            <li id="menu-prodi"><?php
              $class = strpos($page, "/prodi/") === 0 ? "bg-sky-500 text-white" : null;
              Components::button("prodi", Config::url()."/../prodi/", $class, "mahasiswa.svg");
              ?></li>

          </ul>
        </div>
      </aside>