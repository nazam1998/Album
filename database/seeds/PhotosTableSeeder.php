<?php

use Illuminate\Database\Seeder;
use App\Photo;
use Illuminate\Support\Facades\DB;
class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Photo::truncate();
        factory(Photo::class,10000)->create();
    }
}
