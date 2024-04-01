<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia ,SoftDeletes ;

    protected $fillable =
     [
        'title',
        'date',
        'location',
        'description',
        'availablePlaces',
        'status',
        'isAuto',
        'category_id',
        'delated_at',
        'created_at',
        'updated_at',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class, 'reservations')->withPivot('status');
    }

    public function category()
    {
         return $this->belongsTo(Category::class);
    }
}
