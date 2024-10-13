<?php


use App\Models\events;
use App\Models\invitations;
use App\Models\organisators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//GET
Route::get('/users',[events::class, 'index']);
Route::get('/user/{id}',[events::class, 'show']);
Route::get('/copies',[invitations::class, 'index']);
Route::get('/copy/{id}',[invitations::class, 'show']);
Route::get('/users',[organisators::class, 'index']);
Route::get('/user/{id}',[organisators::class, 'show']);

//POST
Route::post('/user',[events::class, 'store']);
Route::post('/copy',[invitations::class, 'store']);
Route::post('/copy',[organisators::class, 'store']);

//PUT
Route::put('/user/{id}',[events::class, 'update']);
Route::put('/copy/{id}',[invitations::class, 'update']);
Route::put('/copy/{id}',[organisators::class, 'update']);

//DELETE
Route::delete('/user/{id}',[events::class, 'destroy']);
Route::delete('/copy/{id}',[invitations::class, 'destroy']);
Route::delete('/copy/{id}',[organisators::class, 'destroy']);

?>