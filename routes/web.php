<?php
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyMediaAccountController;
use App\Http\Controllers\EotmTitleController;
use App\Http\Controllers\FeedbackTitleController;
use App\Http\Controllers\LocationTitleController;
use App\Http\Controllers\ObjectiveTitleController;
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
use App\Models\Feedback;

Route::get('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.page');

Route::post('/create' ,[StoreController::class ,'store'])->name('create.store');


Route::get('/', [CompanyController::class, 'index'])->name('home');


//go to edit page
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('edit.company');

//delete company information
Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('delete.company');

//end of company routing...



//section  routing...

Route::get('/createSection/{page}', [SectionController::class, 'createSectionForm'])->name('show_section.page');

Route::post('/createSection/background/{section}', [BackgroundController::class, 'store'])->name('background.store'); //store background for company

Route::post('/createSection/services/{section}', [ServiceController::class, 'store'])->name('service.store'); //store services for company
Route::get('/services/{section}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/services/{section}', [ServiceController::class, 'update'])->name('service.update');


Route::post('/createSection/partners/{section}', [PartnerController::class, 'store'])->name('partner.store'); //store partners for company

Route::post('/createSection/eotm/{section}', [EmployeeOfTheMonthController::class, 'store'])->name('eotm.store'); //store employee of the month for company

Route::post('/createSection/objectives/{section}', [ObjectiveController::class, 'store'])->name('objective.store'); //store objectives for company

Route::post('/createSection/feedbacks/{section}', [FeedbackController::class, 'store'])->name('feedback.store'); //store objectives for company

Route::post('/createSection/locations/{section}', [LocationController::class, 'store'])->name('location.store'); //store locations for company

Route::post('/createSection/Social-Media/{section}', [CompanyMediaAccountController::class, 'store'])->name('social.store'); //store accounts for company


//route for the employee of the month title section 
Route::post('/createSection/eotmTitle/{section}' ,[EotmTitleController::class, 'store'])->name('eotmTitle.store'); 

//route for the feedback title section 
Route::post('/createSection/feedbackTitle/{section}', [FeedbackTitleController::class, 'store'])->name('feedbackTitle.store'); 

//route for the location title section 
Route::post('/createSection/locationTitle/{section}', [LocationTitleController::class, 'store'])->name('locationTitle.store'); 

//route for the objectives title section 
Route::post('/createSection/objectiveTitle/{section}', [ObjectiveTitleController::class, 'store'])->name('objectiveTitle.store'); 







// update company info 
Route::patch('/edit/company/{company}' , [CompanyController::class, 'update'])->name('company.update');

// update user info
Route::patch('/edit/user/{user}' , [UserController::class, 'update'])->name('user.update');

//update company theme color
Route::patch('/edit/color/{color}' , [PageController::class, 'Color_update'])->name('color.update');


//
//Route::post('/createSections/background/{request}' ,[BackgroundController::class ,'store'])->name('store.background');