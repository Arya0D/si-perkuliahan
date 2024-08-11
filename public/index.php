<?php
include "../vendor/autoload.php";

use App\controller\Controllers;
use App\Router;
use App\controller\ProdiController;
use App\controller\KelasController;
use App\controller\MahasiswaController;
use App\view\Layout;

$router = new Router();

$router->add("GET", "/", Controllers::class, "index");


$router->add("GET", "/prodi/", ProdiController::class, "index");
$router->add("GET", "/prodi/delete", ProdiController::class, "deleteProdi");
$router->add("GET", "/prodi/form", ProdiController::class, "form");
$router->add("POST", "/prodi/form/add", ProdiController::class, "add");
$router->add("POST", "/prodi/form/edit", ProdiController::class, "edit");

$router->add("GET", "/kelas/", KelasController::class, "index");
$router->add("GET", "/kelas/form", KelasController::class, "form");
$router->add("POST", "/kelas/form/add", KelasController::class, "add");
$router->add("POST", "/kelas/form/edit", KelasController::class, "edit");
$router->add("GET", "/kelas/delete", KelasController::class, "deleteKelas");

$router->add("GET", "/mahasiswa/", MahasiswaController::class, "index");
$router->add("GET", "/mahasiswa/form", mahasiswaController::class, "form");
$router->add("POST", "/mahasiswa/form/add", MahasiswaController::class, "add");
$router->add("POST", "/mahasiswa/form/edit", MahasiswaController::class, "edit");
$router->add("GET", "/mahasiswa/delete", mahasiswaController::class, "deleteMahasiswa");




$router->run();