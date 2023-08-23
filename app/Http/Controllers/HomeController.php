<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Project;
use App\Models\ProjectEleve;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        $projects = Project::all();
        $project_eleves = ProjectEleve::all();
        return view("home" , compact("eleves" , "projects" , "project_eleves"));
    }
}
