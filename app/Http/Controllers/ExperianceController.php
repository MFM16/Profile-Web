<?php

namespace App\Http\Controllers;

use App\Models\Experiance;
use App\Models\JobTechonlogy;
use App\Models\Technology;
use App\Models\User;
use App\Http\Requests\StoreExperianceRequest;
use App\Http\Requests\UpdateExperianceRequest;
use Illuminate\Support\Facades\DB;

class ExperianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Experiance',
            'experiances' => Experiance::with('technologies', 'technologies.technology')->simplePaginate(5),
        ];

        return view('admin.experiance.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Experiance',
            'technologies' => Technology::all(),
            'users' => User::all(),
        ];

        return view('admin.experiance.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperianceRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = [
            'user_id' => $request->user_id,
            'place' => $request->place,
            'position' => $request->position,
            'job' => $request->job,
            'job_desc' => $request->job_desc,
            'link' => $request->link,
            ];

            $data['duration_of_work'] = $request->month_from . ' ' . $request->year_from . ' ' . '-' . ' ';

            if($request->now == null || $request->now == ''){
                $data['duration_of_work'] .= $request->month_to . ' ' . $request->year_to;
            }else{
                $data['duration_of_work'] .= $request->now;
            }

            $exp = Experiance::create($data);

            foreach ($request->technology as $technology) {
                $data = [
                    'experiance_id' => $exp->id,
                    'technology_id' => $technology
                ];
                
                JobTechonlogy::create($data);
            }
            
            DB::commit();
            
            return redirect()->route('experiance.create')->with([
                'message' => 'Added experiance successfully !', 
                'bg' => 'bg-green'
            ]);

        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->route('experiance.create')->with([
                'message' => 'Failed added new experiance !', 
                'bg' => 'bg-red'
            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experiance $experiance)
    {
        try {
            DB::beginTransaction();

            Experiance::findOrFail($experiance->id)->delete();
            JobTechonlogy::where('experiance_id', $experiance->id)->delete();

            DB::commit();

            $data = [
                'status' => 'success',
                'message' => 'Experiance deleted successfully!'
            ];

            return response()->json($data);
            

        } catch (\Throwable $th) {
            DB::rollback();

            $data = [
                'status' => 'failed',
                'message' => 'Failed to delete experiance!'
            ];
        }
    }
}
