<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsPersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('personal_access_tokens')->delete();



    }
}
