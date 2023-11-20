<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stay extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'title',
        'numberofrooms',
        'available',
        'image1',
        'image2',
        'image3',
        'image4',
        'country_id',
        'address'

    ];

    public function country(){

        return $this->belongsTo(Country::class,'country_id');
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
