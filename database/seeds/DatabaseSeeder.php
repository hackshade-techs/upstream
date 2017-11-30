<?php

use Illuminate\Database\Seeder;
use Backpack\Settings\database\seeds\SettingsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        // $this->call(NewsTablesSeeder::class);
        factory(Backpack\NewsCRUD\app\Models\Category::class, 4)->create();
        factory(Backpack\NewsCRUD\app\Models\Article::class, 1031)->create();
        factory(Backpack\NewsCRUD\app\Models\Tag::class, 21)->create();
    }
}
