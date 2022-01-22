<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class general extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts=[
        'supplies'=>'array',
        'services'=>'array',
        //'link'=>'array'
    ];

    

    public function getLogoAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        if($value===null)
        {
            return null;
        }
        return asset('storage/images/generals/' . $value);
    }

}
