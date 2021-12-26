<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
use App\Models\Skill;

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
        $admin->username = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->isAdmin = 1;
        $admin->name = "testname";
        $admin->surname = "testsurname";
        $admin->phone = "+901518514512";
        $admin->date_of_birth = "2000-01-01";
        $admin->county_of_birth = "Turkey";
        $admin->country_of_residence = "Turkey";
        $admin->marital_status = "Devorced";
        $admin->current_position = "Web Developer";
        $admin->about = "this is about this is aboutthis is aboutthis is aboutthis is aboutthis is about this is about";
        $admin->password = bcrypt('admin');
        $admin->save();

        for ($i = 0; $i < 13; $i++) {
            $skill = new Skill();
            if ($i % 3 == 0)
                $skill->type = "soft";
            $skill->name = "softskill";
            if ($i % 2 == 0) {
                $skill->type = "expert";
                $skill->name = "expertskill";
            } else {
                $skill->type = "hard";
                $skill->name = "hardskill";
            }
            $skill->user_id = 1;
            $skill->save();
        }
    }
}
