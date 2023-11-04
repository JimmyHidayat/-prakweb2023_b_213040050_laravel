<?

namespace App\Models;

class Post
{

    private static $blog_posts = [
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

    public static function all()
    {
        return collect (self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
