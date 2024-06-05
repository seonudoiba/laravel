<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
//        $users = User::query()->get();
        $users = User::query()->get();
        return new JsonResponse(
            [
                'data' => $users
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request )
    {
        $created = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $created->users()->sync($request->user_ids);

            return new JsonResponse([
                    'data' => $created
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
                'data' => $user
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): JsonResponse
    {
        return new JsonResponse([
                'data' => $user
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        return new JsonResponse([
                'data' => $user
            ]
        );
    }
}
