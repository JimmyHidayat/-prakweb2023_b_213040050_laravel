<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Post::create([
            'name' => 'Jimmy Hidayat',
            'email' => 'jimmy.hidayat@gmail.com',
            'password' => bycrypt('Jimmy')
        ]);

        Category::create([
            'name' => 'Persnoal',
            'slug' => 'personal'
        ]);



        Post::create([
            'title' => 'Judul pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat sunt officia modi consequatur eligendi, perspiciatis, reiciendis soluta tenetur consectetur aut inventore dolores nobis doloribus, unde nisi assumenda labore architecto? Quae fugit laudantium, beatae praesentium pariatur commodi quo! Saepe debitis inventore esse quis nemo veniam eum, nulla atque eveniet mollitia at obcaecati. Doloribus modi sunt nihil maiores asperiores fugiat consectetur unde corrupti consequuntur et. Assumenda, nostrum consequuntur quo laboriosam nesciunt ex ducimus vitae culpa perspiciatis quos eos deserunt a dolorum ratione rem eaque ea eius ipsa magnam mollitia pariatur voluptates in dolores unde? Atque facere porro voluptatem aliquid tempora quos necessitatibus.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat sunt officia modi consequatur eligendi, perspiciatis, reiciendis soluta tenetur consectetur aut inventore dolores nobis doloribus, unde nisi assumenda labore architecto? Quae fugit laudantium, beatae praesentium pariatur commodi quo! Saepe debitis inventore esse quis nemo veniam eum, nulla atque eveniet mollitia at obcaecati. Doloribus modi sunt nihil maiores asperiores fugiat consectetur unde corrupti consequuntur et. Assumenda, nostrum consequuntur quo laboriosam nesciunt ex ducimus vitae culpa perspiciatis quos eos deserunt a dolorum ratione rem eaque ea eius ipsa magnam mollitia pariatur voluptates in dolores unde? Atque facere porro voluptatem aliquid tempora quos necessitatibus.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
