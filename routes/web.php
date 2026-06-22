<?php

use App\Http\Controllers\HomeController;
use App\Mail\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ]);

    Mail::to('limakataodev@gmail.com')->send(new ContactInquiry(
        $validated['name'],
        $validated['email'],
        $validated['message'],
    ));

    return redirect()->back()->with('success', 'Message sent!');
});
