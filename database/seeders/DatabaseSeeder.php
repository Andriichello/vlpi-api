<?php

namespace Database\Seeders;

use Database\Seeders\Customs\CustomExerciseSeeder;
use Database\Seeders\Customs\CustomizedUsChoiceColumnTableSeeder;
use Database\Seeders\Customs\CustomizedUsChoicesTableSeeder;
use Database\Seeders\Customs\CustomizedUsExerciseColumnPassingsTableSeeder;
use Database\Seeders\Customs\CustomizedUsExerciseColumnsTableSeeder;
use Database\Seeders\Customs\CustomizedUsExerciseInfoTableSeeder;
use Database\Seeders\Customs\CustomizedUsExercisePassingsTableSeeder;
use Database\Seeders\Customs\CustomizedUsExercisesTableSeeder;
use Database\Seeders\Customs\CustomizedUsPermissionRoleTableSeeder;
use Database\Seeders\Customs\CustomizedUsPermissionsTableSeeder;
use Database\Seeders\Customs\CustomizedUsPersonalAccessTokensTableSeeder;
use Database\Seeders\Customs\CustomizedUsRolesTableSeeder;
use Database\Seeders\Customs\CustomizedUsUserRolesTableSeeder;
use Database\Seeders\Customs\CustomizedUsUsersTableSeeder;
use Database\Seeders\Customs\CustomizedVoCategoriesTableSeeder;
use Database\Seeders\Customs\CustomizedVoDataRowsTableSeeder;
use Database\Seeders\Customs\CustomizedVoDataTypesTableSeeder;
use Database\Seeders\Customs\CustomizedVoMenuItemsTableSeeder;
use Database\Seeders\Customs\CustomizedVoMenusTableSeeder;
use Database\Seeders\Customs\CustomizedVoPagesTableSeeder;
use Database\Seeders\Customs\CustomizedVoPostsTableSeeder;
use Database\Seeders\Customs\CustomizedVoSettingsTableSeeder;
use Database\Seeders\Customs\CustomizedVoTranslationsTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
//            VoyagerDatabaseSeeder::class,
//            UserSeeder::class,
//            CustomExerciseSeeder::class,
//            ExercisePassingSeeder::class,
        ]);

        Schema::disableForeignKeyConstraints();
        $this->call(CustomizedVoDataRowsTableSeeder::class);
        $this->call(CustomizedVoDataTypesTableSeeder::class);
        $this->call(CustomizedVoMenuItemsTableSeeder::class);
        $this->call(CustomizedVoMenusTableSeeder::class);
        $this->call(CustomizedVoSettingsTableSeeder::class);
        $this->call(CustomizedVoCategoriesTableSeeder::class);
        $this->call(CustomizedVoPostsTableSeeder::class);
        $this->call(CustomizedVoPagesTableSeeder::class);
        $this->call(CustomizedVoTranslationsTableSeeder::class);
        $this->call(CustomizedUsUsersTableSeeder::class);
        $this->call(CustomizedUsRolesTableSeeder::class);
        $this->call(CustomizedUsUserRolesTableSeeder::class);
        $this->call(CustomizedUsPersonalAccessTokensTableSeeder::class);
        $this->call(CustomizedUsPermissionsTableSeeder::class);
        $this->call(CustomizedUsPermissionRoleTableSeeder::class);
        Schema::enableForeignKeyConstraints();

        $this->call(CustomExerciseSeeder::class);
    }
}
