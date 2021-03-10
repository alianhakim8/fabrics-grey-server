<?php 


namespace App\Http\Controllers\FabricDetail;

use App\Http\Controllers\Controller;
use App\Models\Fabric;
use App\Models\FabricDetail;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class FabricDetailController extends Controller {

    use ApiResponser;

    public function index($id) {
        $fabric = Fabric::find($id);
        $fabric_detail = FabricDetail::with('fabric')->where('fabric_id', $fabric->id)->get();        
        
        return $this->successResponse($fabric_detail, 'GET', 200);
    }

    public function store(Request $request) {
        
        $data = new FabricDetail($request->all());
        $data->save();
        return $this->successResponse($data, 'GET', 200);
    }
}