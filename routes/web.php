<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    });
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Test mail route for debugging
// Route::get('/test-mail', function () {
//     try {
//         Mail::raw('Test email from HairTransPro', function($message) {
//             $message->to('drahul6@gmail.com')
//                     ->subject('Test Email');
//         });
//         return 'Mail sent successfully!';
//     } catch (\Exception $e) {
//         return 'Mail error: ' . $e->getMessage();
//     }
// });

// Test contact form mail route for debugging
// Route::get('/test-contact-mail', function () {
//     try {
//         $testData = [
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//             'phone' => '+1234567890',
//             'preferred_date' => '2024-12-25',
//             'service' => 'FUE Hair Transplant',
//             'message' => 'This is a test message for the contact form.'
//         ];
        
//         Mail::to('drahul6@gmail.com')->send(new \App\Mail\ContactFormMail($testData));
//         return 'Contact form mail sent successfully!';
//     } catch (\Exception $e) {
//         return 'Contact form mail error: ' . $e->getMessage() . '<br><br>Stack trace: <pre>' . $e->getTraceAsString() . '</pre>';
//     }
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
