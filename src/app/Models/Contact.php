<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    public function getGenderAttribute($value)
    {
        $genders = [1 => '男性', 2 => '女性', 3 => 'その他'];
        return $genders[$value] ?? '不明';
    }

}
