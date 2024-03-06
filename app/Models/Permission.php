<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class Permission extends Model
{
    use HasFactory ,InteractsWithMedia ,SoftDeletes;

    protected $fillable =
    [
        'name',
        'delated_at',
        'created_at',
        'updated_at',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
