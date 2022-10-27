<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ChairmanController;
use App\Http\Controllers\CompanyprofileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryweserveController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationchartController;
use App\Http\Controllers\OurPartnerController;
use App\Http\Controllers\OurTeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('companyprofile', [CompanyprofileController::class, 'index'])->name('companyprofile');
Route::get('history', [HistoryController::class, 'index'])->name('history.index');
Route::get('chairman', [ChairmanController::class, 'index'])->name('chairman.index');
Route::get('chart', [OrganizationchartController::class, 'index'])->name('chart.index');
Route::get('team', [OurTeamController::class, 'index'])->name('team.index');
Route::get('partners', [OurPartnerController::class, 'index'])->name('partners.index');
Route::get('ourservices', [CountryweserveController::class, 'index'])->name('ourservices.index');

Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('news', NewsController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);
