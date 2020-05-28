<?php

namespace App\Http\Controllers;

use App\Client;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects_count = Project::count();
        $clients_count = Client::count();
        $tasks_count = Task::count();
        return view('home', compact('projects_count', 'clients_count', 'tasks_count'));
    }
}
