<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => 'Jimmy Hidayat',
        "email" => 'jimmy.hidayat@gmail.com',
        "image" => 'Wall E.jpg'
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Jimmy Hidayat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sint, laboriosam asperiores sit molestiae, odio ex nostrum nemo sed ipsam exercitationem? Cupiditate quod itaque quidem temporibus repellendus, quaerat ducimus. Nostrum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Jimmy Hidayat",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsam debitis culpa. Illum, quia hic ducimus rem, asperiores tempora explicabo expedita non, quae libero quaerat voluptatibus sequi sunt maxime numquam quisquam voluptatem alias nesciunt sed recusandae vitae aliquid voluptas nemo. Cumque, neque inventore assumenda corrupti magni ab consequuntur suscipit quia quaerat recusandae blanditiis mollitia doloribus aliquam sint ipsa laborum architecto error, enim modi voluptates facilis velit? Alias nulla qui dolore mollitia beatae nobis est, impedit libero magni hic distinctio dolorem maiores atque unde necessitatibus molestiae repellat, reiciendis laborum. Voluptas adipisci optio eos iure autem quasi, ipsum sunt quos porro dolore."
        ]
    ];

    return view('posts', [
        "title" => "PostS",
        "posts" => $blog_posts
    ]);
});
Route::get('/posts',[PostController :: class, 'index']);
Route::get('/posts/{post:slug}', [PostController :: class, 'show']);
Route::get('/categories', function () {
    return view('category', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
})->scopeBindings();
