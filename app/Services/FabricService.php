<?php

namespace App\Services;

use App\Repositories\FabricRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Validator;
use PharIo\Manifest\InvalidApplicationNameException;

class FabricService {

    protected $fabricRepository;

    public function __construct(FabricRepository $fabricRepository)
    {
        $this->fabricRepository = $fabricRepository;
    }

    public function saveFabric($data) {
        $result = $this->fabricRepository->save($data);
    }

    public function updateFabric($data, $id) {
        $result = $this->fabricRepository->update($data, $id);
        return $result;
    }
}