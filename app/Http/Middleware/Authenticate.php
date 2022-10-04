<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }
    // }

    protected string $student_route  = 'student.login';
    protected string $company_route = 'company.login';

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (Route::is('student.*')) {
                return route($this->student_route);
            } elseif (Route::is('company.*')) {
                return route($this->company_route);
            }
        }
    }
}
