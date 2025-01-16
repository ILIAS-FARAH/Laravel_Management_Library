<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->status == 'accepted') {
                return $next($request);
            } elseif ($user->status == 'rejected') {
                Auth::logout();
                return redirect()->route('login')->withErrors(['email' => 'You were not accepted.']);
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors(['email' => 'Please wait for admin validation.']);
            }
        }
        return redirect()->route('login');
    }

}
