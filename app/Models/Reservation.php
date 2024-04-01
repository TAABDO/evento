<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class Reservation extends Model
{
    use HasFactory,InteractsWithMedia ,SoftDeletes;


    protected $fillable =
    [
         'status',
         'user_id',
         'event_id',
         'delated_at',
         'created_at',
         'updated_at',
    ];


}
