<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $user_id = session('user')->id;
        if(isset(session('user')->id)){
            return $next($request);
        // if($request->route()->parameter('nilai_sem_satu') == $user_id ){
        //     return $next($request);
        // } elseif($request->route()->parameter('nilai_sem_dua') == $user_id ){
        //     return $next($request);
        // } elseif($request->route()->parameter('nilai_sem_tiga') == $user_id ){
        //     return $next($request);
        // } elseif($request->route()->parameter('nilai_sem_empat') == $user_id ){
        //     return $next($request);
        // } elseif($request->route()->parameter('nilai_sem_lima') == $user_id ){
        //     return $next($request);
        // } elseif($request->route()->parameter('nilai_sem_enam') == $user_id ){
        //     return $next($request);
        // } elseif($request->route()->parameter('skd') == $user_id ){
        //     return $next($request);
        }else {
            return redirect(route('home'));
        }
    }
}
