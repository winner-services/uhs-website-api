<?php

namespace App\Http\Controllers\Api\Partenaire;

use App\Http\Controllers\Controller;
use App\Models\Parternaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PartenaireController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/partner.index",
     *      operationId="partenaireIndex",
     *      tags={"Partenaire"},
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
   public function partenaireIndex(){
        $patner = Parternaire::latest()->get();
        return response()->json([
            'status' => 200,
            'success' => true,
            'gallery' => $patner
        ]);
    }

/**
     * @OA\Post(
     *     path="/api/partner.store",
     *     operationId="createPartenaire",
     *     summary="Créer un nouveau",
     *     tags={"Partenaire"},
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

    public function createPartenaire(Request $request){
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
            $data['image'] = $request->file('image')->store('partenaire', 'public');
        }
        Parternaire::create($data);
        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 201
        ], 200);
    }

    /**
 * @OA\Post(
 *     path="/api/partner.update/{id}",
 *     operationId="updatePartenaire",
 *     summary="Modifier un partenaire",
 *     tags={"Partenaire"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=false,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 @OA\Property(property="image", type="string", format="binary")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Mise à jour réussie",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="success"),
 *             @OA\Property(property="success", type="boolean", example=true),
 *             @OA\Property(property="status", type="integer", example=200)
 *         )
 *     ),
 *     @OA\Response(response=404, description="Partenaire non trouvé")
 * )
 */
public function updatePartenaire(Request $request, $id)
{
    $partenaire = Parternaire::find($id);
    if (!$partenaire) {
        return response()->json([
            'message' => 'Partenaire non trouvé.',
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

    if ($request->hasFile('image')) {
        // Supprimer l’ancienne image si elle existe
        if ($partenaire->image && Storage::disk('public')->exists($partenaire->image)) {
            -Storage::disk('public')->delete($partenaire->image);
        }
        $data['image'] = $request->file('image')->store('partenaire', 'public');
    }

    $partenaire->update($data);

    return response()->json([
        'message' => 'success',
        'success' => true,
        'status' => 200
    ], 200);
}


/**
 * @OA\Delete(
 *     path="/api/partner.delete/{id}",
 *     operationId="deletePartenaire",
 *     summary="Supprimer un partenaire",
 *     tags={"Partenaire"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Suppression réussie",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="success"),
 *             @OA\Property(property="success", type="boolean", example=true),
 *             @OA\Property(property="status", type="integer", example=200)
 *         )
 *     ),
 *     @OA\Response(response=404, description="Partenaire non trouvé")
 * )
 */
public function deletePartenaire($id)
{
    $partenaire = Parternaire::find($id);
    if (!$partenaire) {
        return response()->json([
            'message' => 'Partenaire non trouvé.',
            'success' => false,
            'status' => 404
        ], 404);
    }

    // Supprimer l’image si elle existe
    if ($partenaire->image && Storage::disk('public')->exists($partenaire->image)) {
        Storage::disk('public')->delete($partenaire->image);
    }

    $partenaire->delete();

    return response()->json([
        'message' => 'success',
        'success' => true,
        'status' => 200
    ], 200);
}

}
