<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Technology;
use App\Models\ProjectTechnology;
use App\Models\User;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Project',
            'projects' => Portfolio::with('technologies', 'technologies.technology')->simplePaginate(5),
            'technologies' => Technology::all(),
        ];

        return view('admin.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title_page' => 'Admin Page',
            'page' => 'Project',
            'technologies' => Technology::all(),
            'users' => User::all(),
        ];

        return view('admin.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = [
                'user_id' => $request->user_id,
                'project_name' => $request->project_name,
                'project_year' => $request->project_year,
                'project_desc' => $request->project_desc,
                'project_link' => $request->project_link,
            ];

            $data['project_image'] = $request->file('project_image')->store('project-img');

            $portfolio = Portfolio::create($data);
            
            foreach ($request->technology as $technology) {
                $data = [
                    'portfolio_id' => $portfolio->id,
                    'technology_id' => $technology
                ];
                
                ProjectTechnology::create($data);
            }
            
            DB::commit();

            return redirect()->route('project.create')->with([
                'message' => 'Added project successfully !', 
                'bg' => 'bg-green'
            ]);

        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->route('project.create')->with([
                'message' => 'Failed added new project !', 
                'bg' => 'bg-red-500'
            ]);
        }
    }

    public function edit(Portfolio $portfolio)
    {
        $data = Portfolio::with('technologies', 'technologies.technology')->where('id', $portfolio->id)->first();

        $data = [
                'status' => 'success',
                'data' => $data
        ];

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        try {
            DB::beginTransaction();

            Portfolio::findOrFail($portfolio->id)->delete();
            ProjectTechnology::where('portfolio_id', $portfolio->id)->delete();

            DB::commit();

            $data = [
                'status' => 'success',
                'message' => 'Project deleted successfully!'
            ];

            return response()->json($data);
            

        } catch (\Throwable $th) {
            DB::rollback();

            $data = [
                'status' => 'failed',
                'message' => 'Failed to delete project!'
            ];
        }
    }
}
