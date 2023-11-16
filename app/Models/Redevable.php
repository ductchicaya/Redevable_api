<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redevable extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->morphMany(User::class, 'typeable');
    }

    public function cros()
    {
        return $this->belongsToMany(Cro::class);
    }

    public function declares()
    {
        return $this->belongsToMany(Declaratif::class);
    }
}
