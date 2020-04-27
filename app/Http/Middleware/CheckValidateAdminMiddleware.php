<?php

namespace App\Http\Middleware;

use Closure;
use Egulias\EmailValidator\Exception\AtextAfterCFWS;
use Illuminate\Support\Facades\Auth;

class CheckValidateAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            $role= Auth::user();
            if ($role->idRole==1){
                return $next($request);
            }else{
                return redirect('home');
            }
        }else{
            return redirect('home');
        }

    }
}
