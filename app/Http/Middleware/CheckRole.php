<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is authenticated and has the role "admin"
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
    
        // If not authenticated or doesn't have the role "admin," redirect or handle it as needed
        return redirect('/'); // Redirect to home or another page
    }
}
