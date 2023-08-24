<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Project;
use App\Models\ProjectEleve;
use Illuminate\Http\Request;

class ProjectEleveController extends Controller
{
    public function destroy(Project $project , Eleve $eleve){
        $project_eleve = ProjectEleve::where("project_id" , $project->id)->where("eleve_id" , $eleve->id)->first();
        $project_eleve->delete();
        return redirect()->back();
    }
}
