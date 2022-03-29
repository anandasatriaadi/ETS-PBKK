<?php

use App\Http\Controllers\RekamMedisController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/rekam-medis/all', [RekamMedisController::class, 'index_rekam_medis'])->name('index-rekam-medis');

Route::get('/rekam-medis/pasien/{id}', [RekamMedisController::class, 'pasien_rekam_medis'])->name('pasien-rekam-medis');
Route::get('/rekam-medis/dokter/{id}', [RekamMedisController::class, 'dokter_rekam_medis'])->name('dokter-rekam-medis');

Route::get('/rekam-medis/form', [RekamMedisController::class, 'form_rekam_medis'])->name('form-rekam-medis');

Route::post('/rekam-medis/form', [RekamMedisController::class, 'post_rekam_medis'])->name('rekam-medis-post');

require __DIR__.'/auth.php';
