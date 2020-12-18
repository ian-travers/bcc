<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('welcome');
})->name('about');

Route::get('/testimonials', function () {
    return view('welcome');
})->name('testimonials');

Route::get('/contact', function () {
    return view('welcome');
})->name('contact');

Route::get('/contact-team', function () {
    return view('welcome');
});

Route::get('/comments/create', function () {
    return view('comments.create');
})->name('comment.create');

Route::post('/comments', function () {
    request()->validate([
        'body' => 'required',
        'g-recaptcha-response' => ['required', new \App\Rules\Recaptcha()]
    ]);

    dd('Validation passed and we are ready to create the comment');
});

Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );

    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}', function (Comment $comment) {
    $comment->delete();

    return redirect('/');
});
