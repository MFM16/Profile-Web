<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Models\ProjectTechnology;
use App\Models\JobTechonlogy;
use App\Http\Requests\StoreTechnologyRequest;
use App\Http\Requests\UpdateTechnologyRequest;
use Illuminate\Support\Facades\DB;


class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $data = [
        'title_page' => 'Admin Page',
        'page' => 'Tech Stack',
    ];

    public function index()
    {
        $this->data['techs'] = Technology::simplePaginate(5);

        return view('admin.stack.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.stack.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTechnologyRequest $request)
    {
        if(Technology::create(['name' => $request->name]))
        {
             return redirect()->route('tech.create')->with([
                'message' => 'Added stack successfully !', 
                'bg' => 'bg-green'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        try {
            DB::beginTransaction();

            Technology::findOrFail($technology->id)->delete();
            ProjectTechnology::where('technology_id', $technology->id)->delete();
            JobTechonlogy::where('technology_id', $technology->id)->delete();

            DB::commit();

            $data = [
                'status' => 'success',
                'message' => 'Stack deleted successfully!'
            ];

            return response()->json($data);
            

        } catch (\Throwable $th) {
            DB::rollback();

            $data = [
                'status' => 'failed',
                'message' => 'Failed to delete stack!'
            ];
        }
    }
}
