<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Quiero usar el controllador asi que lo importo, se importa con namespace\NombreClase
use App\Http\Controllers\DatosController;
use App\Http\Controllers\JuegosController;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//La ruta puede ser post o get (post para enviar cosas a la bd, get para obtener)
Route::get("medidor/get", [DatosController::class, "getmedidor"]);
Route::get("medida/get", [DatosController::class, "getmedida"]);
//Route::get("endpoint", [controlador::class,"metodo"])
//Rutas del controlador de consolas
Route::get("Datos/get", [DatosController::class, "getDatos"]);
Route::get("Datos/filtrar", [DatosController::class, "filtrarDatos"]);

Route::post("Datos/post", [DatosController::class,"crearDatos"]);
Route::post("Datos/actualizar", [DatosController::class,"actualizarDatos"]);
Route::post("Datos/delete", [DatosController::class,"eliminarDatos"]);

//Rutas del controlador de Juegos
Route::get("juegos/get", [JuegosController::class, "getJuegos"]);
Route::get("juegos/getByConsola", [JuegosController::class, "getJuegosByConsola"]);
Route::post("juegos/post", [JuegosController::class, "save"]);
Route::post("juegos/delete", [JuegosController::class, "remove"]);