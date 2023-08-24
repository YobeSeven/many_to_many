<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectEleveController;
use Illuminate\Support\Facades\Route;

// *----------------* //

Route::get("/" , [HomeController::class , "index"])->name("home.index");


//* Functions
Route::delete("/destroy/{eleve}/eleves" , [EleveController::class , "destroy"])->name("eleves.destroy");
Route::delete("/destroy/{project}/projects" , [ProjectController::class , "destroy"])->name("projects.destroy");

Route::delete("/destroy/{project}/{eleve}/from/project" , [ProjectEleveController::class , "destroy"])->name("projectEleve.destroy");