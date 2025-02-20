<?php     //menandakan awal dari file PHP


//mengimpor Route untuk mendefinisikan rute, data ItemController agar bisa digunakan dalam routing
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//komentar yang menjelaskan bahwa file digunakan untuk mendefinisikan rute web dalam aplikasi laravel

Route::get('/', function () {   //mendefinisikan rute untuk URL utama(/)
    return view('welcome');    //saat diakses akan menampilkan halaman welcome
});

Route::resource('items', ItemController::class);   //membuat rute otomatis untuk items dengan menggunakan ItemController
