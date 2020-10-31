<?php

    use App\Http\Controllers\ChatController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\DemoController;
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
    return view('welcome');
});

//Route::view('/home', 'auth.home');
Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    Route::get('/fetchMessages', [ChatController::class, 'fetchMessages'])->name('fetchMessages');
    Route::post('/sendMessages', [ChatController::class, 'sendMessages'])->name('sendMessages');
});

Route::get('/test', [DemoController::class, 'send']);


