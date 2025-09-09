<?php

namespace App\Http\Controllers\Api\Slide;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/slide.index",
     *      operationId="slideIndex",
     *      tags={"Slide"},
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
    public function slideIndex()
    {
        $data = Slide::inRandomOrder()->get();
        $result = [
            'message' => "success",
            'success' => true,
            'status' => 200,
            'data' => $data
        ];
        return response()->json($result);
    }

    /**
     * @OA\Post(
     *     path="/api/slide.store",
     *     operationId="storeSlide",
     *     summary="Créer une nouvelle",
     *     tags={"Slide"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"image","title"},
     *             @OA\Property(property="title", type="string", example="Jean Dupont"),
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
    public function storeSlide(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }
        $file = $request->file('image');
        $path = $file->store('slide', 'public');
        Slide::create([
            'title' => $request->title,
            'image' => $path
        ]);
        $result = [
            'message' => "success",
            'success' => true,
            'status' => 201
        ];
        return response()->json($result);
    }

    /**
     * @OA\Put(
     *     path="/api/slide.update/{id}",
     *     operationId="updateSlide",
     *     summary="Modifier un slide",
     *     tags={"Slide"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID du slide à modifier"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="title", type="string", example="Nouveau titre"),
     *                 @OA\Property(property="image", type="string", format="binary", description="Nouvelle image du slide")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Slide modifié avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(response=404, description="Slide introuvable"),
     *     @OA\Response(response=422, description="Données invalides")
     * )
     */
    public function updateSlide(Request $request, $id)
    {
        $slide = Slide::find($id);
        if (!$slide) {
            return response()->json([
                'message' => 'Slide introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            // supprimer l'ancienne image si elle existe
            if ($slide->image && Storage::disk('public')->exists($slide->image)) {
                Storage::disk('public')->delete($slide->image);
            }
            $data['image'] = $request->file('image')->store('slide', 'public');
        }

        $slide->update($data);

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 200
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/slide.delete/{id}",
     *     operationId="deleteSlide",
     *     summary="Supprimer un slide",
     *     tags={"Slide"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID du slide à supprimer"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Slide supprimé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(response=404, description="Slide introuvable")
     * )
     */
    public function deleteSlide($id)
    {
        $slide = Slide::find($id);
        if (!$slide) {
            return response()->json([
                'message' => 'Slide introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        // supprimer image associée si existe
        if ($slide->image && Storage::disk('public')->exists($slide->image)) {
            Storage::disk('public')->delete($slide->image);
        }

        $slide->delete();

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 200
        ]);
    }
}
