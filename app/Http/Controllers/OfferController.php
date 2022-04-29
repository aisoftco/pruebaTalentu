<?php

namespace App\Http\Controllers;

use Exception;
use App\Offer;
use App\Http\Requests\saveOfferRequest;
use Illuminate\Http\JsonResponse;

class OfferController extends Controller
{
    public function saveOffer(saveOfferRequest $request): JsonResponse
    {
        try {
            Offer::create([
                'name' => $request->name,
                'user_id' => $request->user_id,
                'status' => $request->status,
            ]);
            return response()->json(['status' => true], 200);
        } catch (Exception $exception) {
            $error = "{$exception->getFile()} -  {$exception->getLine()} - {$exception->getMessage()}";
            return response()->json(['status' => false, 'error' => $error], 200);
        }
    }
}
