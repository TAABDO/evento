<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia ,SoftDeletes;


    protected $fillable =[
        'name',
        'delated_at',
        'created_at',
        'updated_at',
    ];


    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
