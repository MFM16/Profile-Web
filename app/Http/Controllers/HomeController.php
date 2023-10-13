<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'user' => User::with('portfolios', 'profile', 'socials', 'experiances', 'portfolios.technologies', 'experiances.technologies','experiances.technologies.technology', 'portfolios.technologies.technology')->where('id', 1)->first()
        ];

        return view('pages.homePage', $data);
    }

    public function project()
    {
        $data = [
            'projects' => Portfolio::with('technologies', 'technologies.technology')->get()
        ];

        return view('pages.projectPage', $data);
    }

    public function download()
    {
        $path = public_path('123.jpg');
        $file_name = 'Resume_Farhan.jpg';
        
        return Response::download($path, $file_name, ['Content-Type: application/jpg']);
    }
}
