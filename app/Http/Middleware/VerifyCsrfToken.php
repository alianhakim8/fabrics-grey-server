<?php

namespace App\Http\Middleware;

use Closure;

class VerifyCsrfToken
{
    protected $except = [
        'api/*'
    ];
}
