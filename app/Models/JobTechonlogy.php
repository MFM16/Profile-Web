<?php

namespace App\Models;

use App\Models\Experiance;
use App\Models\Technology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobTechonlogy extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function experiance()
    {
        return $this->belongsTo(Experiance::class);
    }

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }
}
