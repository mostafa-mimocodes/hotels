<?php

use Database\Seeders\HotelSeeder;
use Database\Seeders\SettingSeeder;
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
        $this->call(RoleTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(HotelSeeder::class);
    }
}
