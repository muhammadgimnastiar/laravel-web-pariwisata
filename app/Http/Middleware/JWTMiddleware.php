<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;


class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        try{
            $user = JWTAuth::parseToken()->authenticate();
            
        }catch(Exception $e){
            if($e instanceof TokenInvalidException){
                return response()->json(['status'=> 'Token is Invalid'], 403);
            }
            if($e instanceof TokenExpiredException){
                return response()->json(['status'=> 'Token is expired'], 401);
            }
            if($e instanceof TokenBlacklistedException){
                return response()->json(['status'=> 'Token is blacklist'], 403);
            }else{
                return response()->json(['status'=>'Authorization token not found'], 404);
            }
        }
        return $next($request);
    }
}
