<?php

namespace App\models;

use App\Http\Controllers\CRMClientsController;

/**
 * Class CRMClientsPositions
 * @package App\models
 */
class CRMClientsPositions extends CoreModel
{
    protected $table = 'crm_clients_positions';

    protected $fillable = ['id', 'name', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientsPersonsPositionsConnections()
    {
        return $this->hasMany(CRMClientsPersonsPositionsConnections::class, 'position_id', 'id');
    }
}
