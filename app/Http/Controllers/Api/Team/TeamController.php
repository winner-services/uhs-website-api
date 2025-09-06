<?php

namespace App\Http\Controllers\Api\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/team.index",
     *      operationId="team",
     *      tags={"Team"},
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
    public function team()
    {
        $team = Team::latest()->get();
        $result = [
            'message' => "success",
            'success' => true,
            'status' => 200,
            'data' => $team
        ];
        return response()->json($result);
    }

    /**
     * @OA\Post(
     *     path="/api/team.store",
     *     operationId="storeTeam",
     *     summary="Créer un nouveau membre de l'équipe",
     *     tags={"Team"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"name","title"},
     *                 @OA\Property(property="name", type="string", example="Jean Dupont"),
     *                 @OA\Property(property="title", type="string", example="Développeur"),
     *                 @OA\Property(property="phone", type="string", example="+243970000000"),
     *                 @OA\Property(property="email", type="string", format="email", example="jean.dupont@example.com"),
     *                 @OA\Property(property="twitter", type="string", example="@jeandupont"),
     *                 @OA\Property(property="facebook", type="string", example="facebook.com/jeandupont"),
     *                 @OA\Property(property="whatsapp", type="string", example="+243970000000"),
     *                 @OA\Property(
     *                     property="image",
     *                     type="string",
     *                     format="binary",
     *                     description="Image du membre"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Membre créé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=201)
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation"
     *     )
     * )
     */

    public function storeTeam(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:150',
            'title' => 'required|string|max:150',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:150',
            'twitter' => 'nullable|string|max:150',
            'facebook' => 'nullable|string|max:150',
            'whatsapp' => 'nullable|string|max:50',
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
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        Team::create($data);

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 201
        ], 201);
    }

    /**
     * @OA\Post(
     *     path="/api/team.update/{id}",
     *     operationId="updateTeam",
     *     summary="Modifier un membre de l'équipe",
     *     tags={"Team"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID du membre de l'équipe",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="name", type="string", example="Jean Dupont"),
     *                 @OA\Property(property="title", type="string", example="Développeur Senior"),
     *                 @OA\Property(property="phone", type="string", example="+243970000000"),
     *                 @OA\Property(property="email", type="string", format="email", example="jean.dupont@example.com"),
     *                 @OA\Property(property="twitter", type="string", example="@jeandupont"),
     *                 @OA\Property(property="facebook", type="string", example="facebook.com/jeandupont"),
     *                 @OA\Property(property="whatsapp", type="string", example="+243970000000"),
     *                 @OA\Property(
     *                     property="image",
     *                     type="string",
     *                     format="binary",
     *                     description="Nouvelle image du membre (optionnelle)"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Membre mis à jour avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Membre introuvable"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation"
     *     )
     * )
     */

    public function updateTeam(Request $request, $id)
    {
        $team = Team::find($id);

        if (!$team) {
            return response()->json([
                'message' => 'Membre non trouvé',
                'success' => false,
                'status' => 404
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:150',
            'title' => 'sometimes|required|string|max:150',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:150',
            'twitter' => 'nullable|string|max:150',
            'facebook' => 'nullable|string|max:150',
            'whatsapp' => 'nullable|string|max:50',
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
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        $team->update($data);

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 200
        ], 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/team.delete/{id}",
     *     operationId="destroyTeam",
     *     summary="Supprimer un membre de l'équipe",
     *     tags={"Team"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID du membre de l'équipe",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Membre supprimé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Membre supprimé avec succès"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Membre introuvable"
     *     )
     * )
     */
    public function destroyTeam($id)
    {
        $team = Team::find($id);

        if (!$team) {
            return response()->json([
                'message' => 'Membre non trouvé',
                'success' => false,
                'status' => 404
            ], 404);
        }

        if ($team->image && Storage::disk('public')->exists($team->image)) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();

        return response()->json([
            'message' => 'Membre supprimé avec succès',
            'success' => true,
            'status' => 200
        ], 200);
    }
}
