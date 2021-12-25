<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function addCourse($name, $provider, $completed_time, $description)
    {
        $course = new Course;
        $course->user_id = $this->id;
        $course->save();
    }

    public function addEducation($name, $provider, $completed_time, $description)
    {
        $education = new Education;
        $education->user_id = $this->id;
        $education->save();
    }

    public function addExperience($name, $provider, $completed_time, $description)
    {
        $experience = new Experience;
        $experience->user_id = $this->id;
        $experience->save();
    }

    public function addJobPreference($name, $provider, $completed_time, $description)
    {
        $preference = new Job_preference;
        $preference->user_id = $this->id;
        $preference->save();
    }

    public function addLanguage($name, $provider, $completed_time, $description)
    {
        $language = new Language;
        $language->user_id = $this->id;
        $language->save();
    }
    public function addSkill($name, $provider, $completed_time, $description)
    {
        $skill = new Skill;
        $skill->user_id = $this->id;
        $skill->save();
    }






    // Getters & Relations
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    public function languages()
    {
        return $this->hasMany(Language::class);
    }
    public function jobPreferences()
    {
        return $this->hasMany(Job_preference::class);
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }








    /*
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
     * The attributes that should be cast.
     *
     * @var array<string, string>
     
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/
}
