<?php namespace App\Http\Controllers;

use App\models\CRMClientsPersonsPositionsConnections;
use Illuminate\Routing\Controller;

class CRMClientsPersonsPositionsConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmclientspersonspositionsconnections
	 *
	 * @return Response
	 */
	public function index()
	{
        return CRMClientsPersonsPositionsConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmclientspersonspositionsconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmclientspersonspositionsconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmclientspersonspositionsconnections/{id}
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
	 * GET /crmclientspersonspositionsconnections/{id}/edit
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
	 * PUT /crmclientspersonspositionsconnections/{id}
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
	 * DELETE /crmclientspersonspositionsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}