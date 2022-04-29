<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class VerifyJWTToken
{
    public function handle($request, Closure $next): ?JsonResponse
    {
        try {
            JWTAuth::toUser($request->input('token'));
        } catch (JWTException $e) {
            if($e instanceof TokenExpiredException) {
                return response()->json(['token_expired'], $e->getStatusCode());
            }

            if ($e instanceof TokenInvalidException) {
                return response()->json(['token_invalid'], $e->getStatusCode());
            }

            return response()->json(['error'=>'Token is required']);
        }
        
        return $next($request);
    }
}