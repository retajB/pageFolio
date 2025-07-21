<?php
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyMediaAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ObjectiveController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\EmployeeOfTheMonthController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\Company_media_account;
use App\Models\Feedback;
use Database\Seeders\CompanyMediaAccountSeeder;

Route::get('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.page');

Route::post('/create' ,[StoreController::class ,'store'])->name('create.store');

Route::post('/create/page/{company}', [StoreController::class, 'storePage'])->name('page.setup');

Route::get('/create/page/{company}', [PageController::class, 'index'])->name('page.setup.form');

Route::delete('/page/{page}', [PageController::class, 'destroy'])->name('delete_page');

Route::delete('/service/{service}', [ServiceController::class, 'destroy'])->name('service.delete');

Route::delete('/partner/{partner}', [PartnerController::class, 'destroy'])->name('partner.delete');

Route::delete('/eotm/{employee}', [EmployeeOfTheMonthController::class, 'destroy'])->name('eotm.delete');

Route::delete('/location/{location}', [LocationController::class, 'destroy'])->name('location.delete');

Route::delete('/objective/{objective}', [ObjectiveController::class, 'destroy'])->name('objective.delete');

Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.delete');

Route::delete('/media/{account}', [CompanyMediaAccountController::class, 'destroy'])->name('media.delete');

Route::get('/', [CompanyController::class, 'index'])->name('home');




//go to edit page
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('edit.company');

// Show all pages of a company for admin to select which page to edit
Route::get('/company/{company}/pages', [PageController::class, 'listByCompany'])->name('pages.byCompany'); 

// Route::get('/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');

Route::get('/pages/{page}/edit', [SectionController::class, 'editSectionForm'])->name('edit_sections');




//delete company information
Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('delete.company');

//end of company routing...



//section  routing...

Route::get('/createSection/{page}', [SectionController::class, 'createSectionForm'])->name('show_section.page');

Route::post('/createSection/background/{section}', [BackgroundController::class, 'store'])->name('background.store'); //store background for company

Route::post('/createSection/services/{section}', [ServiceController::class, 'store'])->name('service.store'); //store services for company

Route::post('/createSection/partners/{section}', [PartnerController::class, 'store'])->name('partner.store'); //store partners for company

Route::post('/createSection/eotm/{section}', [EmployeeOfTheMonthController::class, 'store'])->name('eotm.store'); //store employee of the month for company

Route::post('/createSection/objectives/{section}', [ObjectiveController::class, 'store'])->name('objective.store'); //store objectives for company

Route::post('/createSection/feedbacks/{section}', [FeedbackController::class, 'store'])->name('feedback.store'); //store objectives for company

Route::post('/createSection/locations/{section}', [LocationController::class, 'store'])->name('location.store'); //store locations for company

Route::post('/createSection/Social-Media/{section}', [CompanyMediaAccountController::class, 'store'])->name('social.store'); //store accounts for company






// update company info 
Route::patch('/edit/company/{company}' , [CompanyController::class, 'update'])->name('company.update');

// update user info
Route::patch('/edit/user/{user}' , [UserController::class, 'update'])->name('user.update');

//update company theme color
Route::patch('/edit/color/{page}' , [PageController::class, 'Color_update'])->name('color.update');
// راوتات جديده للكولور
// Route::get('/pagesColor/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');

Route::patch('/section/{section}/background/{back_title}', [BackgroundController::class, 'update'])->name('background.update');

Route::patch('/section/{section}/service/{service_title}', [ServiceController::class, 'update'])->name('service.update');

Route::patch('/section/{section}/objective/{objective_title}', [objectiveController::class, 'update'])->name('objective.update');

Route::patch('/section/{section}/feedback/{feedback_title}', [FeedbackController::class, 'update'])->name('feedback.update');

Route::patch('/partners/{section}/{partner_title}', [PartnerController::class, 'update'])->name('partner.update');

Route::patch('/section/{section}/EOTM/{eotm_title}', [EmployeeOfTheMonthController::class, 'update'])->name('eotm.update');

Route::patch('/media/{section}', [CompanyMediaAccountController::class, 'update'])->name('media.update');

Route::patch('/sections/{section}/locations/{location_title}', [LocationController::class, 'update'])->name('locations.update');