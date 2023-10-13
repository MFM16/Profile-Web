<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Dashboard',
            'projects' => Portfolio::with('technologies', 'technologies.technology')->simplePaginate(5)
        ];

        return view('admin.dashboard', $data);
    }
}
