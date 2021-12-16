<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


##
## ENLACE A LA API
https://dashboard.heroku.com/apps/aceproyectolaravel
#
## ℹ️TECNOLOGÍAS UTILIZADAS EN EL PROYECTO⚙️
* SQL --> Base de datos.
* PHP --> lenguaje utilizado.
* Composer --> usado como gestor de dependencias.
* Laravel --> framework de PHP usado para la creación de la API.
* Passport --> utilizado para añadir seguridad.
* Heroku --> utilizado para deploy de la API.
#
## ℹ️ENDPOINTS DE LA API
* ### USER
#### Route::get('Usuario', [UserController::class, "showAllUsuario"]);//
#### Route::post('Usuario', [UserController::class, "addUsuarios"]);//
#### Route::get('Usuario/{id}', [UserController::class, "UsuariosByID"]);//
#### Route::put('Usuario/{id}', [UserController::class, "UpdateUsuarios"]);//
#### Route::delete('Usuario/{id}', [UserController::class, "DeleteUsuarios"]);//
##
* ### JUEGO
#### Route::post('Juego', [JuegoController::class, "createJuego"]);//
#### Route::get('Juego', [JuegoController::class, "showAllJuego"]);//
#### Route::get('Juego/{id}', [JuegoController::class, "showJuegoByID"]);//
#### Route::put('Juego/{id}', [JuegoController::class, "updateJuego"]);//
#### Route::delete('Juego/{id}', [JuegoController::class, "deleteJuego"]);//
##
* ### PARTY
#### Route::post('Juego', [JuegoController::class, "createJuego"]);//
#### Route::get('Juego', [JuegoController::class, "showAllJuego"]);//
#### Route::get('Juego/{id}', [JuegoController::class, "showJuegoByID"]);//
#### Route::put('Juego/{id}', [JuegoController::class, "updateJuego"]);//
#### Route::delete('Juego/{id}', [JuegoController::class, "deleteJuego"]);
##
* ### MENSAJE
#### Route::post('Mensaje', [MensajeController::class, "createMensaje"]);//
#### Route::delete('Mensaje/{id}', [MensajeController::class, "deleteMensaje"]);//
#### Route::get('Mensaje/{id}', [MensajeController::class, "MensajebyID"]);//
#### Route::get('Mensaje', [MensajeController::class, "showAllMensaje"]);

## ℹ️IMPLEMENTACIÓN DE SEGURIDAD EN LA API: PASSPORT
* Se instala passport en el proyecto con los siguientes comandos:💻
```
*composer require laravel/passport
*php artisan passport:install
```
##
<h4>GUIA INSTALACIÓN PASSPORT📔</h4>

https://programacionymas.com/blog/api-rest-laravel-passport

