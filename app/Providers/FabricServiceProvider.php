<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Fabric;

class FabricServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Fabric::saving(function($fabric) {
        //     if($fabric->brand_name == '' OR $fabric->machine_id == '') {
        //         $fabric->brand = 'Example';
        //         $fabric->machine_id = 0;
        //     }
        // });
    }
}
