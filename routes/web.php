<?php

use App\Models\Projek;
use Dotenv\Parser\Entry;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Certificate;

//route ke halaman user (welcome)
Route::get('/', [UserController::class, 'view']);

// route ke dashboard
Route::get('/dashboard', function () {   
    // Mengambil jumlah total entri
    $totalEntries = Projek::count(); 

    // ngambil data projek
    $projek = Projek::paginate(2);

    return view('admin.dashboard', compact('projek', 'totalEntries'));
})->middleware(['auth', 'verified'])->name('dashboard');


// route ke certificate
Route::get('/certificate', function () { 
    // Mengambil jumlah total entri
    $totalEntries = Certificate::count(); 

    // ngambil data sertifikat
    $sertifikat = Certificate::paginate(2);

    return view('admin.certificate', compact('sertifikat', 'totalEntries'));
})->middleware(['auth', 'verified'])->name('certificate');


// route ke blog
Route::get('/blog', function () {
    return view('admin.blog');
})->middleware(['auth', 'verified'])->name('blog');



// middleware admin
Route::middleware('auth')->group(function () {
        // buat profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // buat profile selesai

        // buat projek
    Route::get('/add_projek', [AdminController::class, 'add_projek']); // buat ke add_projek
    Route::post('/upload_projek', [AdminController::class, 'upload_projek']); // buat upload form projek
    Route::get('/edit_projek/{id}', [AdminController::class, 'edit_projek']); // buat edit projek
    Route::post('/saveEdit_projek/{id}', [AdminController::class, 'saveEdit_projek']); // buat save edit projek
    Route::get('/delete_projek/{id}', [AdminController::class, 'delete_projek']); // buat delete projek
        // buat projek selesai

        // buat sertifikat
    Route::get('/add_sertifikat', [AdminController::class, 'add_sertifikat']); // buat ke add_sertifikat
    Route::post('/upload_sertifikat', [AdminController::class, 'upload_sertifikat']); // buat upload form projek
    Route::get('/edit_sertifikat/{id}', [AdminController::class, 'edit_sertifikat']); // buat edit sertifikat
    Route::post('/saveEdit_sertifikat/{id}', [AdminController::class, 'saveEdit_sertifikat']); // buat save edit sertifikat
    Route::get('/delete_sertifikat/{id}', [AdminController::class, 'delete_sertifikat']); // buat delete sertifikat
        // buat sertifikat selesai
});



require __DIR__.'/auth.php';
