<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'company_name',
        'title',
        'pic_name',
        'pic_email',
        'pic_tel',
        'position_name',
        'duration',
        'salary_type',
        'content',
        'image',
        'limit_of_candidates',
        'attachment_1',
        'attachment_2'
    ]; //外部からの書き込みを許可するカラム

    public function companies() {
        return $this->belongsTo(Company::class);
    }

    public function matchings() {
        return $this->hasMany(Matching::class);
    }

}
