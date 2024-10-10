<?php

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'blog']);
});

Route::get('/blog-lain', function () {
    // $blogs = Blog::with('penulis')->latest()->get();
    $blogs = Blog::latest()->paginate(5);
    return view('blog-lain', ['blogs' => $blogs]);
});

Route::get('/blog-lain/{blog:slug}', function (Blog $blog) {

    return view('single-article', ['blog' => $blog]);
});

Route::get('/penulis/{user:username}', function ($username) {
    $penulis = User::where('username', $username)->firstOrFail();

    $blogs = Blog::where('penulis_id', $penulis->id)->get();

    session(['last_penulis_url' => url()->current()]);

    return view('blog-penulis', compact('penulis', 'blogs'));
})->name('blogs.penulis');

// Route::get('penulis/{user:username}', function (User $user) {
//     $blogs = $user->blogs->load('penulis');

//     session(['last_penulis_url' => url()->current()]);

//     return view('blog-penulis', [
//         'title' => count($blogs) . ' Blog Dari ' . $user->name,
//         'penulis' => $user,
//         'blogs' => $blogs
//     ]);
// })->name('blogs.penulis');

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
