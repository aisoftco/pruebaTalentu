<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\JsonResponse;
use Exception;

class UserController extends Controller
{
    public function saveUser(SaveUserRequest $request): JsonResponse
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'type_document_id' => $request->type_document_id,
                'document_number' => $request->document_number,
            ]);
            return response()->json(['status' => true], 200);
        } catch (Exception $exception) {
            $error = "{$exception->getFile()} -  {$exception->getLine()} - {$exception->getMessage()}";
            return response()->json(['status' => false, 'error' => $error], 200);
        }
    }
}
