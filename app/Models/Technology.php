<?php

namespace App\Models;

use App\Models\JobTechonlogy;
use App\Models\ProjectTechnology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technology extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function projectTechnologies()
    {
        return $this->hasMany(ProjectTechnology::class);
    }

    public function jobTechnologies()
    {
        return $this->hasMany(JobTechonlogy::class);
    }
}
