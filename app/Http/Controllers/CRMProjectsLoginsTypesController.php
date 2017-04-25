<?php namespace App\Http\Controllers;

use App\models\CRMProjectsLoginsTypes;
use Illuminate\Routing\Controller;

class CRMProjectsLoginsTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmprojectsloginstypes
	 *
	 * @return Response
	 */
	public function index()
	{
        return CRMProjectsLoginsTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmprojectsloginstypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmprojectsloginstypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmprojectsloginstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /crmprojectsloginstypes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /crmprojectsloginstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /crmprojectsloginstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}