<?php

namespace App\Http\Controllers\Api\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/project.index",
     *      operationId="getProjectData",
     *      tags={"Projects"},
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
    public function getProjectData()
    {
        $data = Project::latest()->get();
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
     *     path="/api/project.store",
     *     operationId="createProject",
     *     summary="Créer un nouveau",
     *     tags={"Projects"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"title","description","date"},
     *                 @OA\Property(property="title", type="string", example="Jean Dupont"),
     *                 @OA\Property(property="description", type="string", example="Développeur"),
     *                 @OA\Property(property="date", type="date", example="+243970000000"),
     *                 @OA\Property(
     *                     property="image",
     *                     type="string",
     *                     format="binary",
     *                     description="Image"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="créé avec succès",
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
    public function createProject(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'nullable',
            'description' => 'required',
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
            $data['image'] = $request->file('image')->store('project', 'public');
        }
        Project::create($data);
        $result = [
            'message' => "success",
            'success' => true,
            'status' => 201
        ];
        return response()->json($result);
    }

    /**
     * @OA\Post(
     *     path="/api/project.update/{id}",
     *     operationId="updateProject",
     *     summary="Modifier",
     *     tags={"Projects"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID de l'évènement à modifier"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="title", type="string", example="Conférence Laravel"),
     *                 @OA\Property(property="description", type="string", example="Évènement pour développeurs"),
     *                 @OA\Property(property="date", type="date", example="2025-10-10"),
     *                 @OA\Property(
     *                     property="image",
     *                     type="string",
     *                     format="binary",
     *                     description="Nouvelle image de l'évènement"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Évènement modifié avec succès",
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
    public function updateProject(Request $request, $id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json([
                'message' => 'Projet introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'date' => 'nullable|date',
            'description' => 'sometimes|required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        // ✅ Gestion de l'image
        if ($request->hasFile('image')) {
            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('project', 'public');
        } else {
            unset($data['image']); // conserver l’ancienne image
        }

        $project->update($data);

        return response()->json([
            'message' => 'Mise à jour réussie',
            'success' => true,
            'status' => 200
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/project.delete/{id}",
     *     operationId="deleteProject",
     *     summary="Supprimer",
     *     tags={"Projects"},
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
    public function deleteProject($id)
    {
        $event = Project::find($id);
        if (!$event) {
            return response()->json([
                'message' => 'introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        // supprimer image associée si existe
        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 200
        ]);
    }
}
