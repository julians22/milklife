<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->truncate('posts');

        Post::factory()->count(10)->create();

        Model::reguard();
    }
}
