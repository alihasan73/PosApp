<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Resources\PostDetailResource;

class PostController extends BaseController
{
    public function index(){
        $posts = Post::all();
        // return response()->json(['data' => $posts]);
        return PostResource::collection($posts);
    }
    public function create(Request $request){
        $input = $request->all();
        $user = Auth::user();
        $data = Validator::make($input,[
            "title" => "required",
            "new_content" => "required",
        ]);
        if($data->fails()){
            return $this->sendError('Validation Error', $data->errors());
        }
        $input['author'] = $user->id;
        $posts = Post::create($input);
        return $this->sendResponse(new PostResource($posts), "Posts created successfully");
    }
    public function show($id){
        $data = Post::find($id);
        if(is_null($data)){
            return $this->sendError('Data not found');
        }
        return $this->sendResponse(new PostResource($data), 'Data retrieved successfuly'); 
    }
    public function update(Request $request, $id){
        $data = Post::find($id);
        if(is_null($data)){
            return $this->sendError('data not found', $data, 404);
        }
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "new_content" => "required"
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error', $validator->errors(), 400);
        }
        $data->update([
            'title' => $request->get('title'),
            'new_content' => $request->get('new_content')
        ]);
        return $this->sendResponse(new PostResource($data), 'Post updated successfully');
    }
    public function delete($id){
        $data = Post::find($id);
        // dd($data);
        $data->delete();
        return $this->sendResponse(new PostResource($data), 'Post deleted successfully');
    }
}
