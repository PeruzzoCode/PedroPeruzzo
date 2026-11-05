<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpdeskController;

Route::get('/', function () {
    return view('portifolio');
});

Route::get('/helpdesk', 
[HelpdeskController::class, 'index'])->namespace
('helpdesk');

Route::post('/helpdesk', 
[HelpdeskController::class, 'salvar'])->namespace
('helpdesk.salvar');
