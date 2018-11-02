<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('DefaultUsersSeeder');
        $this->call('MastersSeeder');
        $this->call('MinionSeeder');
        $this->call('BuildingSeeder');
        $this->call('SpellSeeder');
    }
}
