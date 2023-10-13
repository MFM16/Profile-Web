<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Profile Page',
            'profile' => Profile::where('user_id', Auth::user()->id)->first(),
        ];

        return view('admin.profile', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $data = [
            'name' => $request->name,
            'job' => $request->job,
            'about_me' => $request->about_me,
            'job_des' => $request->job_desc,
        ];

        if(Profile::where('id', $profile->id)->update($data))
        {
            return redirect()->route('profile')->with([
                'message' => 'Profile updated successfully !', 
                'bg' => 'bg-green'
            ]);
        }
    }
}
