<?php

namespace App\Repositories\Interfaces;
use Illuminate\Http\Request;

interface PostRepositoryInterface
{
    public function getAllPosts($sec);

    public function getPostById($id);

    public function createPost($sec);

    public function updatePost($id, Request $request);

    public function storePost($sec , Request $request);

    public function deletePost($id);

}
