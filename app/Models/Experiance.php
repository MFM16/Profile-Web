<?php

namespace App\Models;

use App\Models\User;
use App\Models\JobTechonlogy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experiance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function technologies()
    {
        return $this->hasMany(JobTechonlogy::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
