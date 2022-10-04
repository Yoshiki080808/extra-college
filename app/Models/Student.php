<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'zipcode',
        'country',
        'address_1',
        'address_2',
        'address_3',
        'tel',
        'image',
        'degree',
        'university',
        'department',
        'faculty'
    ]; //外部からの書き込みを許可するカラム
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function matchings() {
        return $this->hasMany(Matching::class);
    }

}
