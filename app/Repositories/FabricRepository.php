<?php

namespace App\Repositories;

use App\Models\Fabric;
use App\Services\FabricService;

class FabricRepository {

    protected $fabric;

    public function __construct(Fabric $fabric, FabricService $fabricService)
    {
        $this->fabric = $fabric;
        $this->fabric_repository = $fabricService;
        
    }

    public function save($data) {
        
        $fabric = new $this->fabric;

        $fabric->fabric_type = $data['fabric_type'];
        $fabric->machine_id = $data['machine_id'];
        $fabric->brand = $data['brand'];
        $fabric->po_number = $data['po_number'];
        
        $fabric->save();

        return $fabric->fresh();
    }

    public function update($data, $id) {

        $fabric = $this->fabric::find($id);

        $fabric->fabric_type = $data['fabric_type'];
        $fabric->machine_id = $data['machine_id'];
        $fabric->brand = $data['brand'];
        $fabric->po_number = $data['po_number'];

        $fabric->save();

        return $fabric->fresh();
    }
}