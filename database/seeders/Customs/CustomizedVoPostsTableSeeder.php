<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedVoPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('posts')->delete();



    }
}
