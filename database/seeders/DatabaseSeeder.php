<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        
        //  \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Ainan',
        //     'email'=> 'ainanihj@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Pandi',
        //     'email'=> 'pandi@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Post::factory(20)->create();
        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'web-programming',
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel recusandae quia quis nisi impedit officiis quo placeat dolor cum, voluptatum reiciendis, mollitia accusamus nobis? Obcaecati esse labore vitae dolorem perspiciatis asperiores natus veniam aperiam corrupti tempore suscipit odio error',
        //     'category_id'=> '1',
        //     'user_id'=> '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel recusandae quia quis nisi impedit officiis quo placeat dolor cum, voluptatum reiciendis, mollitia accusamus nobis? Obcaecati esse labore vitae dolorem perspiciatis asperiores natus veniam aperiam corrupti tempore suscipit odio error',
        //     'category_id'=> '1',
        //     'user_id'=> '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel recusandae quia quis nisi impedit officiis quo placeat dolor cum, voluptatum reiciendis, mollitia accusamus nobis? Obcaecati esse labore vitae dolorem perspiciatis asperiores natus veniam aperiam corrupti tempore suscipit odio error',
        //     'category_id'=> '2',
        //     'user_id'=> '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug'=> 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius perspiciatis ratione natus quam veritatis corrupti velit labore vel recusandae quia quis nisi impedit officiis quo placeat dolor cum, voluptatum reiciendis, mollitia accusamus nobis? Obcaecati esse labore vitae dolorem perspiciatis asperiores natus veniam aperiam corrupti tempore suscipit odio error',
        //     'category_id'=> '2',
        //     'user_id'=> '2'
        // ]);
    }
}
