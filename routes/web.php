<?php
  
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\announcementController;
  
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

Route::resource('users', userController::class);
Route::resource('announcements', announcementController::class);

/*------------------------------------------
--------------------------------------------
Add Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/create', [userController::class, 'create'])->name('manageusers.create');
Route::post('create', [userController::class, 'create'])->name('create');


/*------------------------------------------
--------------------------------------------
Users List Routes List
--------------------------------------------
--------------------------------------------*/
Route::view('manageannouncement.showAnnouncement' , 'showAnnouncement');
Route::get('/show', [announcementController::class, 'show'])->name('manageannouncement.showAnnouncement');

Route::view('manageannouncement.updateAnnouncement' , 'updateAnnouncement');
Route::get('/edit/{id}', [announcementController::class, 'edit'])->name('manageannouncement.updateAnnouncement');
Route::get('/update/{id}', [announcementController::class, 'edit'])->name('manageannouncement.updateAnnouncement');
Route::patch('/update/{id}', [announcementController::class, 'update'])->name('manageannouncement.updateAnnouncement');
Route::delete('/destroy/{id}', [announcementController::class, 'destroy'])->name('manageannouncement.destroy');



/*------------------------------------------
--------------------------------------------
Edit Users List Routes List
--------------------------------------------
--------------------------------------------*/

Route::view('manageusers.newuseredit' , 'newuseredit');
Route::get('/edit/{id}', [userController::class, 'edit'])->name('manageusers.newuseredit');
Route::get('/update/{id}', [userController::class, 'edit'])->name('manageusers.newuseredit');
Route::patch('/update/{id}', [UserController::class, 'update'])->name('manageusers.newuseredit');
Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('manageusers.destroy');






  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:Cashier'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:Admin'])->group(function () {  
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

/*------------------------------------------
--------------------------------------------
Add Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/admin/create', [userController::class, 'create'])->name('manageusers.create');
Route::post('create', [userController::class, 'create'])->name('create');

/*------------------------------------------
--------------------------------------------
Users List Routes List
--------------------------------------------
--------------------------------------------*/
Route::view('manageusers.userlists' , 'userlists');
Route::get('/admin/userlist', [userController::class, 'show'])->name('manageusers.userlists');

/*------------------------------------------
--------------------------------------------
Edit Users List Routes List
--------------------------------------------
--------------------------------------------*/

Route::view('manageusers.newuseredit' , 'newuseredit');
Route::get('/admin/edit/{id}', [userController::class, 'edit'])->name('manageusers.newuseredit');
Route::get('/admin/update/{id}', [userController::class, 'edit'])->name('manageusers.newuseredit');
Route::patch('/admin/update/{id}', [UserController::class, 'update'])->name('manageusers.newuseredit');


/*------------------------------------------
--------------------------------------------
Add Announcement Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/admin/addAnnouncement', [announcementController::class, 'create'])->name('manageannouncement.addAnnouncement');
Route::post('create', [announcementController::class, 'create'])->name('create');

/*------------------------------------------
--------------------------------------------
Announcement List Routes List
--------------------------------------------
--------------------------------------------*/
Route::view('manageannouncement.showAnnouncement' , 'showAnnouncement');
Route::get('/admin/showAnnouncement', [announcementController::class, 'show'])->name('manageannouncement.showAnnouncement');


 /*------------------------------------------
--------------------------------------------
Edit Announceemnt List Routes List
--------------------------------------------
--------------------------------------------*/

Route::view('manageannouncement.updateAnnouncement' , 'updateAnnouncement');
Route::get('/admin/edit/{id}', [announcementController::class, 'edit'])->name('manageannouncement.updateAnnouncement');
Route::get('/admin/update/{id}', [announcementController::class, 'edit'])->name('manageannouncement.updateAnnouncement');
Route::patch('/admin/update/{id}', [announcementController::class, 'update'])->name('manageannouncement.updateAnnouncement');



});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:Petakom Committee'])->group(function () {
    
    Route::get('manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
  
    // /*------------------------------------------
    // --------------------------------------------
    // Add Users Routes List
    // --------------------------------------------
    // --------------------------------------------*/
    // Route::get('manager/create', [UserController::class, 'create'])->name('manageusers.create');
    // Route::post('manager/create', [UserController::class, 'store'])->name('manageusers.store');
  
    // /*------------------------------------------
    // --------------------------------------------
    // Users List Routes List
    // --------------------------------------------
    // --------------------------------------------*/
    // Route::get('/manager/userlist', [UserController::class, 'show'])->name('manageusers.userlists');
  
    // /*------------------------------------------
    // --------------------------------------------
    // Edit Users List Routes List
    // --------------------------------------------
    // --------------------------------------------*/
    // Route::get('/manager/edit/{id}', [UserController::class, 'edit'])->name('manageusers.edit');
    // Route::patch('/manager/update/{id}', [UserController::class, 'update'])->name('manageusers.update');
  
  
    // /*------------------------------------------
    // --------------------------------------------
    // Add Announcement Routes List
    // --------------------------------------------
    // --------------------------------------------*/
    // Route::get('/manager/addAnnouncement', [AnnouncementController::class, 'create'])->name('manageannouncement.create');
    // Route::post('/manager/addAnnouncement', [AnnouncementController::class, 'store'])->name('manageannouncement.store');
  
    // /*------------------------------------------
    // --------------------------------------------
    // Announcement List Routes List
    // --------------------------------------------
    // --------------------------------------------*/
    // Route::get('/manager/showAnnouncement', [AnnouncementController::class, 'show'])->name('manageannouncement.show');
  
    // /*------------------------------------------
    // --------------------------------------------
    // Edit Announcement List Routes List
    // --------------------------------------------
    // --------------------------------------------*/
    // Route::get('/manager/editAnnouncement/{id}', [AnnouncementController::class, 'edit'])->name('manageannouncement.edit');
    // Route::patch('/manager/updateAnnouncement/{id}', [AnnouncementController::class, 'update'])->name('manageannouncement.update');
});




