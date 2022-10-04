<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'companies';

    protected $fillable = [
        'name',
        'industry',
        'zipcode',
        'country',
        'address_1',
        'address_2',
        'address_3',
        'pic_name',
        'email',
        'password',
        'tel',
        'image'
    ]; //外部からの書き込みを許可するカラム

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function internships() {
        return $this->hasMany(Internship::class);
    }

    public function matchings() {
        return $this->hasMany(Matching::class);
    }

}
