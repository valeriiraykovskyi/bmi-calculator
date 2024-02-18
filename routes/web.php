
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BMIController;

Route::get('/bmi', [BMIController::class, 'index']);
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('calculate');

