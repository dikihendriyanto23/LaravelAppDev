<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        // User::create([
        //     'name' => 'Muhammad Diki Hendriyanto',
        //     'email' => 'diki23@gmail.com',
        //     'password' => bcrypt('diki123')
        // ]);

        // User::create([
        //     'name' => 'Bayu Ajie',
        //     'email' => 'bayuajie@gmail.com',
        //     'password' => bcrypt('bayu123')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum officiis modi fuga, harum at porro.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quod repellat, inventore dolorum possimus expedita quidem dolores illum quaerat iure consequuntur veritatis recusandae deserunt, perspiciatis vitae aperiam necessitatibus at corrupti neque veniam asperiores? Odit dignissimos doloremque quisquam neque. Corporis, numquam.</p><p>Delectus esse optio eius natus recusandae ullam vero odio vitae, rem impedit inventore animi mollitia suscipit asperiores minima, deserunt voluptatibus voluptates eos ipsam cum. Minima aut minus excepturi, dolor nemo voluptatem id dolore, labore autem sint officiis qui velit odio officia aperiam illo quos ratione nihil incidunt adipisci blanditiis tempora. Dolorem, ipsum voluptatum.</p><p>Laboriosam officiis perferendis neque, laudantium odio ratione modi at optio beatae repudiandae nemo voluptas consequuntur rem in iure distinctio vero fuga consequatur sequi dolorem, nostrum minus eveniet sed! Dolorum voluptates itaque sit consequuntur magnam sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti nisi at deserunt architecto, tenetur corporis perspiciatis! Totam ut rerum dolorum fugit voluptas, ex fugiat, eum cupiditate reiciendis dolores voluptate natus odio optio suscipit commodi at veniam. Maiores, nostrum iste nihil eius est tenetur quod ea aut voluptatibus placeat blanditiis!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum officiis modi fuga, harum at porro.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quod repellat, inventore dolorum possimus expedita quidem dolores illum quaerat iure consequuntur veritatis recusandae deserunt, perspiciatis vitae aperiam necessitatibus at corrupti neque veniam asperiores? Odit dignissimos doloremque quisquam neque. Corporis, numquam.</p><p>Delectus esse optio eius natus recusandae ullam vero odio vitae, rem impedit inventore animi mollitia suscipit asperiores minima, deserunt voluptatibus voluptates eos ipsam cum. Minima aut minus excepturi, dolor nemo voluptatem id dolore, labore autem sint officiis qui velit odio officia aperiam illo quos ratione nihil incidunt adipisci blanditiis tempora. Dolorem, ipsum voluptatum.</p><p>Laboriosam officiis perferendis neque, laudantium odio ratione modi at optio beatae repudiandae nemo voluptas consequuntur rem in iure distinctio vero fuga consequatur sequi dolorem, nostrum minus eveniet sed! Dolorum voluptates itaque sit consequuntur magnam sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti nisi at deserunt architecto, tenetur corporis perspiciatis! Totam ut rerum dolorum fugit voluptas, ex fugiat, eum cupiditate reiciendis dolores voluptate natus odio optio suscipit commodi at veniam. Maiores, nostrum iste nihil eius est tenetur quod ea aut voluptatibus placeat blanditiis!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum officiis modi fuga, harum at porro.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quod repellat, inventore dolorum possimus expedita quidem dolores illum quaerat iure consequuntur veritatis recusandae deserunt, perspiciatis vitae aperiam necessitatibus at corrupti neque veniam asperiores? Odit dignissimos doloremque quisquam neque. Corporis, numquam.</p><p>Delectus esse optio eius natus recusandae ullam vero odio vitae, rem impedit inventore animi mollitia suscipit asperiores minima, deserunt voluptatibus voluptates eos ipsam cum. Minima aut minus excepturi, dolor nemo voluptatem id dolore, labore autem sint officiis qui velit odio officia aperiam illo quos ratione nihil incidunt adipisci blanditiis tempora. Dolorem, ipsum voluptatum.</p><p>Laboriosam officiis perferendis neque, laudantium odio ratione modi at optio beatae repudiandae nemo voluptas consequuntur rem in iure distinctio vero fuga consequatur sequi dolorem, nostrum minus eveniet sed! Dolorum voluptates itaque sit consequuntur magnam sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti nisi at deserunt architecto, tenetur corporis perspiciatis! Totam ut rerum dolorum fugit voluptas, ex fugiat, eum cupiditate reiciendis dolores voluptate natus odio optio suscipit commodi at veniam. Maiores, nostrum iste nihil eius est tenetur quod ea aut voluptatibus placeat blanditiis!</p>'
        // ]);


    }
}
