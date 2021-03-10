<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Fabric;

class FabricDetail extends Model
{

    protected $table = 'fabric_details';

    protected $brand_name = '';
    // protected $guarded = [
    //     'machine_id'
    // ];  

    protected $guarded = [];

    // protected $fillable = [
    //     "fabric_id",
    //     "qty",
    //     "oil_dirty",
    //     "slub",
    //     "hole_small",
    //     "hole_big",
    //     "yarn_broken",
    //     "description",
    // ];

    protected $casts = [
        // 'is_lot_to_lot' => 'boolean',
        // 'is_perbaikan'  => 'boolean',
        // 'show_logo'     => 'boolean',
        // 'point'         => 'integer',
        // 'is_cab'        => 'boolean',
        // 'is_rib'        => 'boolean',
    ];

    protected $rules = [
        // 'fabric_id'        => 'required',
        // 'lot_number'    => 'required',
        // 'total_weight'  => 'required',
        // 'point'         => 'required_without_all:jenis_kain,custom_point|integer|min:1',
        // 'custom_point'  => 'required_without:point|integer|min:1',
    ];

    public function fabric() {
        return $this->belongsTo(Fabric::class);
    }
    
}
