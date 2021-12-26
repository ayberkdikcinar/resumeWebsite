<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new ModelsUser();
        $admin->username='admin';
        $admin->email='admin@admin';
        $admin->isAdmin=1;
        $admin->password=bcrypt('admin');
        $admin->save();
    }
}
