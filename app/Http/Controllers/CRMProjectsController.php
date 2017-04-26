<?php namespace App\Http\Controllers;

use App\models\CRMProjects;
use Illuminate\Routing\Controller;

class CRMProjectsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /crmprojects
     *
     * @return Response
     */
    public function index()
    {
        $configuration = [];


        $configuration["projects"] = CRMProjects::with(['client', 'persons'])->get()->toArray();
        $configuration["totalCount"] = sizeof($configuration['projects']);


       // dd($configuration["projects"]);

        return view('content.projects', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /crmprojects/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /crmprojects
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /crmprojects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /crmprojects/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /crmprojects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /crmprojects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}