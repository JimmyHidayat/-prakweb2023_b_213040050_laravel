<?php

use Illuminate\Support\Facades\Route;

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
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => 'Jimmy Hidayat',
        "email" => 'jimmy.hidayat@gmail.com',
        "image" => 'Wall E.jpg'
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Jimmy Hidayat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sint, laboriosam asperiores sit molestiae, odio ex nostrum nemo sed ipsam exercitationem? Cupiditate quod itaque quidem temporibus repellendus, quaerat ducimus. Nostrum!"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Jimmy Hidayat",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsam debitis culpa. Illum, quia hic ducimus rem, asperiores tempora explicabo expedita non, quae libero quaerat voluptatibus sequi sunt maxime numquam quisquam voluptatem alias nesciunt sed recusandae vitae aliquid voluptas nemo. Cumque, neque inventore assumenda corrupti magni ab consequuntur suscipit quia quaerat recusandae blanditiis mollitia doloribus aliquam sint ipsa laborum architecto error, enim modi voluptates facilis velit? Alias nulla qui dolore mollitia beatae nobis est, impedit libero magni hic distinctio dolorem maiores atque unde necessitatibus molestiae repellat, reiciendis laborum. Voluptas adipisci optio eos iure autem quasi, ipsum sunt quos porro dolore."
        ]
    ];

    return view('posts', [
        "tittle" => "PostS",
        "posts" => $blog_posts
    ]);
});

// halaman singgle post
Route:
get('posrts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Jimmy Hidayat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sint, laboriosam asperiores sit molestiae, odio ex nostrum nemo sed ipsam exercitationem? Cupiditate quod itaque quidem temporibus repellendus, quaerat ducimus. Nostrum!"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Jimmy Hidayat",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsam debitis culpa. Illum, quia hic ducimus rem, asperiores tempora explicabo expedita non, quae libero quaerat voluptatibus sequi sunt maxime numquam quisquam voluptatem alias nesciunt sed recusandae vitae aliquid voluptas nemo. Cumque, neque inventore assumenda corrupti magni ab consequuntur suscipit quia quaerat recusandae blanditiis mollitia doloribus aliquam sint ipsa laborum architecto error, enim modi voluptates facilis velit? Alias nulla qui dolore mollitia beatae nobis est, impedit libero magni hic distinctio dolorem maiores atque unde necessitatibus molestiae repellat, reiciendis laborum. Voluptas adipisci optio eos iure autem quasi, ipsum sunt quos porro dolore."
        ]
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Singgle Post",
        "post" => $new_post
    ]);
});
