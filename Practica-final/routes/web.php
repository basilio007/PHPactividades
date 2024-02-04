<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

//ruta raiz
route::get("/", [ProyectoController::class, "index"])->name("Pproyecto.index");

//crear usuario
route::post("/iniciarsession", [ProyectoController::class, "create"])->name("Proyecto.create");

//logearse
route::get('/logearse', [ProyectoController::class, 'loginview'])->name('Proyecto.login');

Route::post('/iniciarsesion', [ProyectoController::class, 'login'])->name('Proyecto.iniciarSesion');

// ruta de la vista login
route::get('/see', [ProyectoController::class, "app"])->name("app.see");

// ruta a la vista de modificaion usuario
route::get("/modifiqueuser", [ProyectoController::class, "modificar"])->name("proyecto.mmdfikusr");

// ruta para actulizar la info de un usuario en la BD
route::post("/update-data-user", [ProyectoController::class, "actualizar"])->name("proyecto.actualizar");

// ruta de la vista usuario
route::get('/userview', [ProyectoController::class, "Uview"])->name("proyecto.Uview");

// ruta de retroceso al la vista login
Route::get('/logout', [ProyectoController::class, 'logout'])->name('app.logout');

// ruta de retroceso al la de aplicacio (ADMIN)
Route::get('/goback', [ProyectoController::class, 'retroceder'])->name('app.retroceder');

route::get('/eliminar-{id}', [ProyectoController::class, "delete"])->name("proyecto.delete");




