<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
class PortfolioController extends Controller
{
    
    public function index()
    {
        $skills = Skill::all();
        $project = Project::latest()->take(9)->get();
        return view('user.index', compact('skills', 'project'));
    }
}
