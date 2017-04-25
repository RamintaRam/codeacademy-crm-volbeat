<?php namespace App\Http\Controllers;

use App\models\CRMProjectsPersonsTypes;
use Illuminate\Routing\Controller;

class CRMProjectsPersonsTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /crmprojectspersonstypes
     *
     * @return Response
     */
    public function index()
    {
        return CRMProjectsPersonsTypes::with(['projectsPersonsTypesConnections'])->get();
    }

    /**
     * Show the form for creating a new resource.
     * GET /crmprojectspersonstypes/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /crmprojectspersonstypes
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /crmprojectspersonstypes/{id}
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
     * GET /crmprojectspersonstypes/{id}/edit
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
     * PUT /crmprojectspersonstypes/{id}
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
     * DELETE /crmprojectspersonstypes/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}