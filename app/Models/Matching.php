<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_matching',
        'is_orientation',
        'is_internship',
        'is_done'
    ]; //外部からの書き込みを許可するカラム


    public function students() {
        return $this->belongsTo(Student::class);
    }

    public function companies() {
        return $this->belongsTo(Company::class);
    }

    public function internships() {
        return $this->belongsTo(Internship::class);
    }
}
