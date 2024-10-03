<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CekLogin
{
    public function handle(Request $request, Closure $next)
{
    if (!Auth::check()) {
        return redirect('admin');
    }

    $user = Auth::user();
    
    // Misalkan kita ingin memeriksa apakah user adalah admin
    if ($user->level == 'admin') {
        return $next($request);
    }

    // Jika user bukan admin, kita redirect
    return redirect('admin');
}

}

