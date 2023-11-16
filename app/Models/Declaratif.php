<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaratif extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "releve_declaratifs";

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
