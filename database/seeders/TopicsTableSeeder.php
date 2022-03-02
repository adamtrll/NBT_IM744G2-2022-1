<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['title' => 'World', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'U.S.', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Technology', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Design', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Culture', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Business', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Politics', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Opinion', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Science', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Health', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Style', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
        Topic::create(['title' => 'Travel', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad provident harum fugiat assumenda, asperiores ratione fuga quasi voluptas aut sint quae sit quia labore praesentium architecto laudantium magnam nesciunt! Cumque?']);
    }
}
