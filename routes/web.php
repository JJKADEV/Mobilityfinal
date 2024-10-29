<?php
use App\Http\Controllers\MissionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/missions/create', [MissionController::class, 'create'])->name('missions.create');
Route::post('/missions/store', [MissionController::class, 'store'])->name('missions.store');
Route::get('/get-agent-by-id', [MissionController::class, 'getAgentById']);
Route::get('/find-agent', [MissionController::class, 'findAgent']);