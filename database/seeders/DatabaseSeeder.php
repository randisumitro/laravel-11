<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User; // Pastikan untuk mengimpor model User
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



//        Category::create([
//            'name' => 'Web Design',
//            'slug' => Str::slug('Web Design')
//        ]);

  //      Post::create([
  //          'title' => 'Judul Artikel 1',
   //         'author_id' => 1,
    //        'category_id' => 1,
      //      'slug' => Str::slug('Judul Artikel 1'),
        //    'body' => 'Once you have defined your factories, you may use the static factory method provided to your models by the Illuminate\Database\Eloquent\Factories\HasFactory trait in order to instantiate a factory instance for that model. Let\'s take a look at a few examples of creating models. First, we\'ll use the make method to create models without persisting them to the database.'
        //]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
           Category::all(),
           User::all() 
        ])->create();

        
    }
}
