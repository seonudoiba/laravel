<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $post = Post::query()->get();
        return new JsonResponse([
            'data' => $post
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $created = Post::query()->create([
            'name' => $request->title,
            'email' => $request->body,
        ]);
//        $created->posts()->sync($request->user_ids);

        return new JsonResponse([
                'data' => $created
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new JsonResponse([
            'data' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
       $updated = $post->update([
           'title' => $request->title ?? $post->title,
            'body' => $request->body ?? $post->body
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
