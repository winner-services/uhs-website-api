<?php

namespace App\Http\Controllers\Api\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/gallery.index",
     *      operationId="galleryIndex",
     *      tags={"Gallery"},
     *      summary="Get",
     *      description="Returns list",
     *      @OA\Response(
     *          response=200,
     *          description="Successful",
     * *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *       ),
     *     )
     */
   public function galleryIndex(){
        $gallery = Gallery::all();
        return response()->json([
            'status' => 200,
            'success' => true,
            'gallery' => $gallery
        ]);
    }

/**
     * @OA\Post(
     *     path="/api/gallery.store",
     *     operationId="createGallery",
     *     summary="Créer une nouvelle",
     *     tags={"Gallery"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"image"},
     *                 @OA\Property(property="image", type="string", format="binary")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Création réussie",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=201)
     *         )
     *     ),
     *     @OA\Response(response=422, description="Données invalides")
     * )
     */

    public function createGallery(Request $request){
         $validator = Validator::make($request->all(),[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }
        $data = $validator->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }
        Gallery::create($data);
        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 201
        ], 200);

    }
}
