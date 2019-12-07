<?php

namespace App\Http\Middleware;

use Closure;

class redirectLogin
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
        $logined = $request->session()->get('logined');
//        dd($logined);
        if ($logined == true){
//            return $next($request);
            return redirect()->route('listUser');
        }else{
            return view('login');
        }

    }

}
