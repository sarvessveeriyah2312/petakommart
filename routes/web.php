<?php
  
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\announcementController;
use App\Http\Controllers\inventoryController;
use App\Http\Controllers\rosterController;  
  
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
Route::resource('inventorys', inventoryController::class);
Route::resource('rosters', rosterController::class);


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
Route::view('manageusers.userlists' , 'userlists');
Route::get('/userlist', [userController::class, 'show'])->name('manageusers.userlists');

/*------------------------------------------
--------------------------------------------
Edit Users List Routes List
--------------------------------------------
--------------------------------------------*/

Route::view('manageusers.newuseredit', 'newuseredit')->name('manageusers.newuseredit');
Route::get('edit/{id}', [userController::class, 'edit'])->name('manageusers.edit');
Route::get('update/{id}', [userController::class, 'edit'])->name('manageusers.update');
Route::patch('update/{id}', [userController::class, 'update'])->name('manageusers.updatePatch');

/*------------------------------------------
--------------------------------------------
Add Announcement Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/addAnnouncement', [announcementController::class, 'create'])->name('manageannouncement.addAnnouncement');
Route::post('create', [announcementController::class, 'create'])->name('create');

/*------------------------------------------
--------------------------------------------
Announcement List Routes List
--------------------------------------------
--------------------------------------------*/
Route::view('manageannouncement.showAnnouncement' , 'showAnnouncement');
Route::get('/showAnnouncement', [announcementController::class, 'show'])->name('manageannouncement.showAnnouncement');


 /*------------------------------------------
--------------------------------------------
Edit Announceemnt List Routes List
--------------------------------------------
--------------------------------------------*/

Route::view('manageannouncement.updateAnnouncement', 'updateAnnouncement')->name('manageannouncement.updateAnnouncement');
Route::get('/edit/{id}', [announcementController::class, 'edit'])->name('manageannouncement.editAnnouncement');
Route::get('/update/{id}', [announcementController::class, 'edit'])->name('manageannouncement.updateAnnouncement');
Route::patch('/update/{id}', [announcementController::class, 'update'])->name('manageannouncement.updateAnnouncement');






/*------------------------------------------
--------------------------------------------
Add Inventory Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/addinventory', [inventoryController::class, 'create'])->name('manageinventory.addinventory');
Route::post('create', [inventoryController::class, 'create'])->name('create');

/*------------------------------------------
--------------------------------------------
inventory List Routes List
--------------------------------------------
--------------------------------------------*/
Route::view('manageinventory.inventorylist' , 'inventorylist');
Route::get('/inventorylist', [inventoryController::class, 'show'])->name('manageinventory.inventorylist');

Route::get('/inventory-list', [inventoryController::class, 'inventorylist'])->name('manageinventory.inventory-list');


 /*------------------------------------------
--------------------------------------------
Edit Inventory List Routes List
--------------------------------------------
--------------------------------------------*/

Route::view('manageinventory.updateinventory' , 'updateinventory')->name('manageinventory.updateinventory');
Route::get('/edit/{id}', [inventoryController::class, 'edit'])->name('manageinventory.updateinventory');
Route::get('/update/{id}', [inventoryController::class, 'edit'])->name('manageinventory.updateinventory');
Route::patch('/update/{id}', [inventoryController::class, 'update'])->name('manageinventory.updateinventory');


/*------------------------------------------
--------------------------------------------
Add Schedule Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/addSchedule', [rosterController::class, 'create'])->name('manageRoster.addSchedule');
Route::post('create', [rosterController::class, 'create'])->name('create');

/*------------------------------------------
--------------------------------------------
Schedule List Routes List
--------------------------------------------
--------------------------------------------*/
Route::view('manageRoster.listSchedule' , 'listSchedule');
Route::get('/listSchedule', [rosterController::class, 'show'])->name('manageRoster.listSchedule');


 /*------------------------------------------
--------------------------------------------
Edit Schedule List Routes List
--------------------------------------------
--------------------------------------------*/

Route::view('manageRoster.updateSchedule' , 'updateSchedule');
Route::get('/edit/{id}', [rosterController::class, 'edit'])->name('manageRoster.updateSchedule');
Route::get('/update/{id}', [rosterController::class, 'edit'])->name('manageRoster.updateSchedule');
Route::patch('/update/{id}', [rosterController::class, 'update'])->name('manageRoster.updateSchedule');
Route::get('/viewSchedule',[rosterController::class, 'view'])->name('manageRoster.viewSchedule');

Route::get('/announcementlist', [announcementController::class, 'view'])->name('manageannouncement.announcementlist');
Route::get('/announcements/{id}', [announcementController::class, 'detail'])->name('announcements.detail');
Route::get('/announcementsdetails/{id}', [announcementController::class, 'detail'])->name('announcements.detail');


  
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



});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:Petakom Committee'])->group(function () {
    
    Route::get('manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
  
    
});




