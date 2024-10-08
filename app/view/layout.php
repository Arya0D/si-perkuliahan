<?php
session_start();
use App\view\components\Components;
use App\Config;
if (!isset($_SESSION['login'])) {
  header("location: /login/");
}

$user = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?=Config::url().'/css/output.css' ?>" />
</head>

<body class="h-full w-full">
<nav class="fixed top-0 left-0 w-full">
<div class="w-100 flex justify-between items-center px-6 py-4 border border-1 bg-neutral-50 h-[64px]">
<a href="/" class="text-xl font-semibold">SI-PERKULIAHAN</a>
  <div class="flex gap-4 items-center">
          <a href="" class="text-sky-300 font-bold"><?= $user['username']; ?></a>
          <a href="/logout/" class="btn ">Logout</a>
        </div>
</div>
</nav>

<main class=" w-full mt-[62px] flex ">
<aside class="h-screen w-1/5 bg-stone-50 border border-2">
<div class="p-2 sticky top-[64px]">
<h1 class="text-center text-xl font-semibold">DASHBOARD</h1>
<ul class="grid gap-2 m-1 relative">
<li id="menu-mahasiswa"><?php
$class = "bg-stone-200";
Components::button("Mahasiswa", Config::url()."/../mahasiswa/", $class, "mahasiswa.svg");
?></li>
<li id="menu-kelas"><?php
$class = "bg-stone-200";
Components::button("kelas", Config::url()."/../kelas/", $class, "mahasiswa.svg");
?></li>
<li id="menu-prodi"><?php
$class = "bg-stone-200";
Components::button("prodi", Config::url()."/../prodi/", $class, "mahasiswa.svg");
?></li>

</ul>
</div>
</aside>

<?php $this->view(); ?>

</main>

</body>

</html>