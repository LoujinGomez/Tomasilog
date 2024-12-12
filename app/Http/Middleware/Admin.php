<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Check if the user is authenticated
        $user = Auth::user();
    
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }
    
        // Allow access based on the role
        if ($user->role === $role) {
            return $next($request);
        }
    
        // Redirect user to their homepage if they are not admin
        if ($user->role === 'user') {
            return redirect()->route('welcome')->with('error', 'You are not authorized to access this page.');
        }
    
        // Forbidden response for other cases
        return abort(403);
    }
}