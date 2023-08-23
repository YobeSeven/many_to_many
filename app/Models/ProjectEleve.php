<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEleve extends Model
{
    use HasFactory;

    protected $fillable = [
        "project_id",
        "eleve_id",
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function eleve(){
        return $this->belongsTo(Eleve::class);
    }
}
