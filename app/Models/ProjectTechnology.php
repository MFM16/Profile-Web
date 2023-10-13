<?php

namespace App\Models;

use App\Models\Portfolio;
use App\Models\Technology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectTechnology extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function portfoli0()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }
}
