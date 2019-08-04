<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CarreasTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(RequestsTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        $this->call(CursosTableSeeder::class);
    }
}
