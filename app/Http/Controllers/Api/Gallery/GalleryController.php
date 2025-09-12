<?php

namespace App\Http\Controllers\Api\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
    public function galleryIndex()
    {
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

    public function createGallery(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

    /**
     * @OA\Post(
     *     path="/api/gallery.update/{id}",
     *     operationId="updateGallery",
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
    // ✅ Mettre à jour une image de la galerie
    public function updateGallery(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return response()->json([
                'message' => 'Image introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        // Gestion de l'image
        if ($request->hasFile('image')) {
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }
            $data['image'] = $request->file('image')->store('gallery', 'public');
        } else {
            unset($data['image']); // conserver l’ancienne image
        }

        $gallery->update($data);

        return response()->json([
            'message' => 'Mise à jour réussie',
            'success' => true,
            'status' => 200
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/gallery.delete/{id}",
     *     operationId="deleteGallery",
     *     summary="Supprimer un évènement",
     *     tags={"Gallery"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID de l'évènement à supprimer"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Évènement supprimé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Évènement introuvable"
     *     )
     * )
     */

    // ✅ Supprimer une image de la galerie
    public function deleteGallery($id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return response()->json([
                'message' => 'Image introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        // Supprimer l'image physique si elle existe
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return response()->json([
            'message' => 'Image supprimée avec succès',
            'success' => true,
            'status' => 200
        ]);
    }
}
