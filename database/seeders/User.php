<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Education;
use App\Models\Language;
use App\Models\Skill;
use App\Models\Course;
use App\Models\Job_preference;
use App\Models\Page;
use App\Models\Site_setting;
use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        $admin->country_of_birth = "Turkey";
        $admin->country_of_residence = "Turkey";
        $admin->marital_status = "Devorced";
        $admin->current_position = "Web Developer";
        $admin->about = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus nisi quis velit blandit commodo. Etiam a consequat nisl, quis ornare turpis. Donec posuere euismod sollicitudin. Nunc sagittis elit id feugiat interdum. Pellentesque a odio pretium, vehicula leo vitae, dictum ipsum. Ut nec risus est. Vivamus efficitur tellus ut feugiat ultricies. Ut sed congue leo. Curabitur ultrices condimentum leo eget hendrerit. Aenean ullamcorper scelerisque nisl eget viverra. Fusce molestie, neque eu sollicitudin maximus, metus lorem vestibulum enim, eget commodo augue dui ac nisl. Duis id nibh nulla.";
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

        for ($i = 0; $i < 2; $i++) {
            $experience = new Experience();
            $experience->company_name = "Test Company";
            $experience->position = "Test Position";
            $experience->position_title = "Test Position Title";
            $experience->location = "USA";
            $experience->from_time = "2000-01-01";
            $experience->to_time = "2020-01-01";
            $experience->description = "Test Description";
            $experience->user_id = 1;
            $experience->save();
        }

        for ($i = 0; $i < 2; $i++) {
            $education = new Education();
            $education->education_level = "PHD";
            $education->school = "DEU";
            $education->from_time = "2018-01-01";
            $education->to_time = "2022-01-01";
            $education->degree = "Bachelor";
            $education->area_of_study = "CENG";
            $education->location = "Turkey";
            $education->activities_societies = "BLA BLA";
            $education->description = "bla bla";
            $education->user_id = 1;
            $education->save();
        }


        for ($i = 0; $i < 2; $i++) {
            $language = new Language();

            $language->name = "English";
            $language->proficiency = "Beginner";
            $language->user_id = 1;
            $language->save();
        }

        for ($i = 0; $i < 2; $i++) {
            $job_preference = new Job_preference();
            $job_preference->field = "Intern";
            $job_preference->desired_location = "Turkey";
            $job_preference->user_id = 1;
            $job_preference->save();
        }

        for ($i = 0; $i < 3; $i++) {
            $course = new Course();
            $course->name = "Test Course";
            $course->provider = "PROVIDER";
            $course->from_time = "2021-01-01";
            $course->to_time = "2021-07-07";
            $course->description = "Course Description";
            $course->user_id = 1;
            $course->save();
        }
        $names = ["Homepage","Contact Us","About Us","Terms Of Use", "Privacy Policies","How It Works","loginpage"];
        for($i = 0; $i < sizeof($names); $i++){
            $page = new Page();
            $page->title = $names[$i];
            $page->image_url = "public/uploads/homepage_image.jpg";
            $page->slug = Str::slug($names[$i]);
            $page->save();
        }

        $site_setting = new Site_setting();
        $site_setting->title = "Default Title";
        $site_setting->license = "All rigths served 2022";
        $site_setting->logo_url = "public/uploads/homepage_image.jpg";
        $site_setting->facebook_url = "";
        $site_setting->twitter_url = "";
        $site_setting->linkedin_url = "";
        $site_setting->instagram_url = "";
        $site_setting->save();
    }
}
