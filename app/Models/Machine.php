<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fabric;

class Machine extends Model {

    protected $table = 'machines';
    // protected $guard = [
    //     'id'
    // ];

    public function fabric() {
        return $this->hasMany(Fabric::class);
    }
}
