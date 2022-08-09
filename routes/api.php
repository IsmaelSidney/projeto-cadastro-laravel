<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario as UsuarioListar;
use App\Http\Controllers\API\Usuario;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function(){
    Route::get('lista',function(){
        return UsuarioListar::listar(10);
    });

    Route::post('cadastra',[Usuario::class, 'salvar']);
});

Route::prefix('v2')->group(function(){
    //
});
