<?php

namespace App\Http\Controllers;

use App\Models\Sosial;
use App\Models\User;
use App\Http\Requests\StoreSosialRequest;
use App\Http\Requests\UpdateSosialRequest;
use Illuminate\Support\Facades\Auth;

class SosialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Social Media',
            'socials' => Sosial::where('user_id', Auth::user()->id)->simplePaginate(5),
        ];

        return view('admin.social.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Social Media',
            'users' => User::all(),
        ];

        return view('admin.social.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSosialRequest $request)
    {
        $data = [
            'user_id' => $request->user_id,
            'name' => $request->name,
            'link' => $request->link,
            'logo' => $request->logo,
        ];

        if(Sosial::create($data))
        {
             return redirect()->route('social.create')->with([
                'message' => 'Added account successfully !', 
                'bg' => 'bg-green'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sosial $social)
    {
        Sosial::findOrFail($social->id)->delete();

        $data = [
            'status' => 'success',
            'message' => 'Account deleted successfully!'
        ];

        return response()->json($data);
    }
}
