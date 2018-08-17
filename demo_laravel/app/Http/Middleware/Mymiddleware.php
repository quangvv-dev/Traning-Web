<?php

namespace App\Http\Middleware;

use Closure;

class Mymiddleware
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
        if($request->has('diem')&&$request->input('diem')>=5)   //kiem tra name= 'diem',has:ton tai gia tri dau vao
        return $next($request);
        else 
            return redirect()->back()->with('message_danger','khong du diem qua');
    }
}



// <?php 
// namespace App\Http\Middleware; 
// use Closure; 
// class BeforeMiddleware 
// { 
//         public function handle($request, Closure $next) 
//     { 
//         // Perform action return $next($request); 
//     }
// }


// <?php 
// namespace App\Http\Middleware; 
// use Closure; 
// class AfterMiddleware 
// { 
//     public function handle($request, Closure $next) 
//     { 
//         $response = $next($request); // Perform action return $response; 
//     }
// }