<?php

namespace App\Http\Controllers\Api\Offre;

use App\Http\Controllers\Controller;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OffreController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/offres.index",
     *   summary="Lister toutes les offres",
     *   tags={"Offres"},
     *   @OA\Response(
     *     response=200,
     *     description="Liste des offres",
     *     @OA\JsonContent(
     *       type="object",
     *       @OA\Property(property="message", type="string", example="Liste des offres récupérée avec succès."),
     *       @OA\Property(property="offres", type="array",
     *         @OA\Items(ref="#/components/schemas/Offre")
     *       )
     *     )
     *   )
     * )
     */
    public function indexOffres()
    {
        $page = request("paginate", 10);

        $offres = Offre::latest()->paginate($page);

        return response()->json([
            'success' => true,
            'status' => 200,
            'data'    => $offres
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/offres.store",
     *     summary="Créer une nouvelle offre",
     *     tags={"Offres"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"intitule","description","date_publication","date_limite"},
     *                 @OA\Property(property="intitule", type="string", example="Développement Web"),
     *                 @OA\Property(property="description", type="string", example="Prestation de développement d’un site web"),
     *                 @OA\Property(property="nature", type="string", example="Consultation"),
     *                 @OA\Property(property="numero_offres", type="string", example="OFF-2025-001"),
     *                 @OA\Property(property="secteur_activite", type="string", example="Informatique"),
     *                 @OA\Property(property="date_publication", type="string", format="date", example="2025-09-01"),
     *                 @OA\Property(property="date_limite", type="string", format="date", example="2025-10-01"),
     *                 @OA\Property(property="zone_execution", type="string", example="Kinshasa"),
     *                 @OA\Property(property="fichier", type="string", format="binary", description="Fichier PDF de l’offre")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Offre créée avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Offre créée avec succès"),
     *             @OA\Property(property="data", ref="#/components/schemas/Offre")
     *         )
     *     ),
     *     @OA\Response(response=422, description="Erreur de validation")
     * )
     */
    public function storeOffre(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'intitule' => 'required|string|max:255',
            'description' => 'required|string',
            'nature' => 'nullable|string|max:255',
            'numero_offres' => 'nullable|string|max:255',
            'secteur_activite' => 'nullable|string|max:255',
            'date_publication' => 'required|date',
            'date_limite' => 'required|date|after_or_equal:date_publication',
            'zone_execution' => 'nullable|string|max:255',
            'fichier' => 'nullable|mimes:pdf|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }
        $data = $validator->validated();

        if ($request->hasFile('fichier')) {
            $data['fichier'] = $request->file('fichier')->store('offres', 'public');
        }

        $offre = Offre::create($data);

        return response()->json([
            'message' => 'Offre créée avec succès',
            'status' => 201,
            'success' => true,
            'data' => $offre
        ], 201);
    }

    /**
     * @OA\Post(
     *     path="/api/offres.update/{id}",
     *     summary="Mettre à jour une offre",
     *     tags={"Offres"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de l’offre",
     *         required=true,
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="intitule", type="string", example="Développement Web modifié"),
     *                 @OA\Property(property="description", type="string", example="Description modifiée"),
     *                 @OA\Property(property="nature", type="string", example="Appel d’offre"),
     *                 @OA\Property(property="numero_offres", type="string", example="OFF-2025-002"),
     *                 @OA\Property(property="secteur_activite", type="string", example="Marketing"),
     *                 @OA\Property(property="date_publication", type="string", format="date", example="2025-09-05"),
     *                 @OA\Property(property="date_limite", type="string", format="date", example="2025-10-15"),
     *                 @OA\Property(property="zone_execution", type="string", example="Lubumbashi"),
     *                 @OA\Property(property="fichier", type="string", format="binary", description="Nouveau fichier PDF de l’offre")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Offre mise à jour avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Offre mise à jour avec succès"),
     *             @OA\Property(property="data", ref="#/components/schemas/Offre")
     *         )
     *     ),
     *     @OA\Response(response=404, description="Offre non trouvée"),
     *     @OA\Response(response=422, description="Erreur de validation")
     * )
     */
    public function updateOffre(Request $request, Offre $offre)
    {
        $validated = $request->validate([
            'intitule' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'nature' => 'nullable|string|max:255',
            'numero_offres' => 'nullable|string|max:255',
            'secteur_activite' => 'nullable|string|max:255',
            'date_publication' => 'sometimes|required|date',
            'date_limite' => 'sometimes|required|date|after_or_equal:date_publication',
            'zone_execution' => 'nullable|string|max:255',
            'fichier' => 'nullable|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('fichier')) {
            if ($offre->fichier && Storage::disk('public')->exists($offre->fichier)) {
                Storage::disk('public')->delete($offre->fichier);
            }
            $validated['fichier'] = $request->file('fichier')->store('offres', 'public');
        }

        $offre->update($validated);

        return response()->json([
            'message' => 'Offre mise à jour avec succès',
            'status' => 200,
            'success' => true,
            'data' => $offre
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/offres.delete/{id}",
     *     summary="Supprimer une offre",
     *     tags={"Offres"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de l’offre à supprimer",
     *         required=true,
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Offre supprimée avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Offre supprimée avec succès")
     *         )
     *     ),
     *     @OA\Response(response=404, description="Offre non trouvée")
     * )
     */
    public function destroyOffre(Offre $offre)
    {
        if ($offre->fichier && Storage::disk('public')->exists($offre->fichier)) {
            Storage::disk('public')->delete($offre->fichier);
        }

        $offre->delete();

        return response()->json([
            'message' => 'Offre supprimée avec succès',
            'status' => 200,
            'success' => true,
        ]);
    }
}
