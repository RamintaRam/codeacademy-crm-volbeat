<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\models\CRMProjectsTypes;

class CRMProjectsTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /crmprojectstypes
     *
     * @return Response
     */
    public function index()
    {
        return CRMProjectsTypes::with(['project'])->get();
    }

    /**
     * Show the form for creating a new resource.
     * GET /crmprojectstypes/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /crmprojectstypes
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /crmprojectstypes/{id}
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
     * GET /crmprojectstypes/{id}/edit
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
     * PUT /crmprojectstypes/{id}
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
     * DELETE /crmprojectstypes/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}