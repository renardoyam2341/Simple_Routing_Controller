<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/', [Controller::class, 'show']);
Route::get('/AboutMe', [AboutMeController::class, 'show']);
Route::get('/Skills', [SkillsController::class, 'show']);
Route::get('/Hobbies', [HobbiesController::class, 'show']);
