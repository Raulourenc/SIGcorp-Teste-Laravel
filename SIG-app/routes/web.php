<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Modules\Company\Entities\Info;


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

// ------- End Admin Route ------- //

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $id = auth()->user()->id;
    $i = Info::where('user_id', $id)->get();
    
    if(!empty($i[0]['name']))
    {
        session()->put('sign',true);
    }
    //dd(session()->get('sign'));
    return view('dashboard')->with(['id' => $id]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
