<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function getAge(){
        return Carbon::parse($this->attributes['date_of_birth'])->age;
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
    public function documents()
    {
        return $this->hasMany(Document::class);
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
