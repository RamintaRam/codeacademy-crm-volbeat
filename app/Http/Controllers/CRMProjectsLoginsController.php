<?php namespace App\Http\Controllers;

use App\models\CRMProjectsLogins;
use Illuminate\Routing\Controller;

class CRMProjectsLoginsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /crmprojectslogins
     *
     * @return Response
     */
    public function index()
    {
        return CRMProjectsLogins::with(['projectLoginConnection', 'projectLoginType'])->get();
    }

    /**
     * Show the form for creating a new resource.
     * GET /crmprojectslogins/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /crmprojectslogins
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /crmprojectslogins/{id}
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
     * GET /crmprojectslogins/{id}/edit
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
     * PUT /crmprojectslogins/{id}
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
     * DELETE /crmprojectslogins/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}