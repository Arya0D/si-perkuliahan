<?php
use App\Config;
session_start();
if (isset($_SESSION['login'])) {
  header("location: /");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="<?=Config::url().'/css/output.css' ?>" />
</head>
</head>
<body class="flex justify-center items-center h-screen">

<form method="post">
<div class="card shadow-lg border border-2 border-sky-600 w-72 md:w-96">
<div class="card-body">
<h2 class="card-title text-sky-700 justify-center text-3xl">Login</h2>
<h1 class="text-red-500 font-semibold"><?= @$x ?></h1>
<div class="flex flex-col ">
<label>Username</label>
<input type="text" name="username" class="input border-black focus:border-sky-600 focus:outline-none" />
</div>

<div class="flex flex-col">
<label>Password</label>
<input type="text" name="password" class="input border-black focus:border-sky-600 focus:outline-none" />
</div>

<div class="card-actions">
<button class="btn w-full">Login</button>
</div>
</div>
</div>
</form>
</body>
</html>