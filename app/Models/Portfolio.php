<?php

namespace App\Models;

use App\Models\User;
use App\Models\ProjectTechnology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technologies()
    {
        return $this->hasMany(ProjectTechnology::class);
    }
}
