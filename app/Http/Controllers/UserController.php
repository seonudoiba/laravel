<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(
            [
                'data' => "aaa"
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ): JsonResponse
    {
        return new JsonResponse([
                'data' => "Saved"
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): JsonResponse
    {
        return new JsonResponse(
            [
                'data' => "Users"
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): JsonResponse
    {
        return new JsonResponse([
                'data' => "Updated"
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        return new JsonResponse([
                'data' => "Removed"
            ]
        );
    }
}
