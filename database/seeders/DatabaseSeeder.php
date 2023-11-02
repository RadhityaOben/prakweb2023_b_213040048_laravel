<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Radhitya',
            'email' => 'radhitya@mail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Rivan',
            'email' => 'rivan@mail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game',
        ]);

        Category::create([
            'name' => 'Music',
            'slug' => 'music',
        ]);

        Post::create([
            'title' => 'osu!',
            'slug' => 'osu',
            'excerpt' => 'osu! is a rhythm game based...',
            'body' => 'osu! is a rhythm game based on the gameplay of a variety of popular commercial rhythm games such as Osu! Tatakae! Ouendan and Elite Beat Agents.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Minecraft',
            'slug' => 'minecraft',
            'excerpt' => 'Minecraft is a sandbox video game...',
            'body' => 'Minecraft is a sandbox video game developed by Mojang Studios. The game was created by Markus "Notch" Persson in the Java programming language. Following several early test versions, it was released as a paid public alpha for personal computers in 2009 before releasing in November 2011, with Jens Bergensten taking over development. Minecraft has since been ported to several other platforms and is the best-selling video game of all time, with 200 million copies sold and 126 million monthly active users as of 2020.',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Death Metal',
            'slug' => 'death-metal',
            'excerpt' => 'Death metal is an extreme subgenre...',
            'body' => 'Death metal is Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti expedita suscipit fuga quisquam dolorem sed in assumenda architecto illum unde laborum enim rem nostrum omnis iusto ad aliquam illo perferendis, ut voluptatibus iure dignissimos! Optio voluptas cum repellendus, quis, excepturi tempora dolor necessitatibus tempore, hic dolores id corrupti amet maxime totam non voluptatem laborum? Eius, dolorem. Earum repellendus praesentium corrupti nesciunt alias sequi rerum omnis error asperiores sit possimus molestias modi voluptate fugit dicta provident totam vero odio odit, excepturi incidunt. Deserunt, quo expedita at numquam corporis consectetur cum alias, perspiciatis exercitationem molestias molestiae, beatae dolore eaque blanditiis quod rerum quas aut incidunt. Eos fuga dolorum nisi deleniti nobis tempore ipsum natus eveniet velit provident hic nemo quod, numquam aspernatur officia dolor. Sapiente illum dolorem placeat molestiae accusamus, repellendus blanditiis, explicabo, error iure repudiandae eos magnam odit voluptates sit architecto? Quidem excepturi beatae eligendi veniam sit quibusdam hic saepe dolores voluptatem reiciendis repudiandae mollitia consectetur ipsum magni unde ut quae debitis impedit ducimus aperiam aliquid, veritatis laboriosam at libero! Veniam excepturi similique saepe autem modi omnis ex quae doloremque, itaque unde sit voluptatum aspernatur aliquid adipisci officiis quis dignissimos eligendi tempore. Doloribus fuga facere sequi quidem voluptatum ut repellendus perspiciatis.',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
