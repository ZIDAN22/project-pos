<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\inventaris;
use App\Models\User;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display the supervisor dashboard.
     */
    public function index()
    {
        $inventarisCount = inventaris::count();
        $userCount = User::count();
        $adminCount = User::where('role', 'admin')->count();
        $supervisorCount = User::where('role', 'supervisor')->count();

        return view('supervisor.dashboard', compact('inventarisCount', 'userCount', 'adminCount', 'supervisorCount'));
    }
}
