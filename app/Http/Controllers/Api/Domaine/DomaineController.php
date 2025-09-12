<?php

namespace App\Http\Controllers\Api\Domaine;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Domaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DomaineController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/domaine.index",
     *      operationId="indexDomaine",
     *      tags={"Domaine"},
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
    public function indexDomaine()
    {
        $data = Domaine::join('categories', 'domaines.category_id', '=', 'categories.id')
            ->select(
                'domaines.id',
                'domaines.title',
                'domaines.description',
                'domaines.image',
                'domaines.category_id',
                'categories.designation as category'
            )
            ->get();

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 200,
            'data' => $data
        ]);
    }
    /**
     * @OA\Get(
     *      path="/api/category.index",
     *      operationId="indexCategories",
     *      tags={"Domaine"},
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
    public function indexCategories()
    {
        $data = Category::all();
        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * @OA\Post(
     * path="/api/category.store",
     * summary="Create",
     * description="Creation",
     * security={{ "bearerAuth":{ }}},
     * operationId="storeCategorie",
     * tags={"Domaine"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Enregistrer",
     *    @OA\JsonContent(
     *       required={"designation"},
     *       @OA\Property(property="designation", type="string", format="text",example="rdc"),
     *    ),
     * ),
     * @OA\Response(
     *    response=201,
     *    description="success",
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="ysteme",
     *     )
     * )
     */

    public function storeCategorie(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'designation' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = new Category();
        $data->designation = $request->designation;
        $data->save();
        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 201
        ]);
    }

    /**
     * @OA\Put(
     * path="/api/category.update/{id}",
     * summary="Update",
     * description="Mise à jour d'une catégorie",
     * security={{ "bearerAuth":{ }}},
     * operationId="updateCategorie",
     * tags={"Domaine"},
     * @OA\Parameter(
     *    name="id",
     *    in="path",
     *    required=true,
     *    description="ID de la catégorie",
     *    @OA\Schema(type="integer")
     * ),
     * @OA\RequestBody(
     *    required=true,
     *    description="Mise à jour",
     *    @OA\JsonContent(
     *       required={"designation"},
     *       @OA\Property(property="designation", type="string", format="text", example="Congo"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="success",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Catégorie non trouvée",
     * )
     * )
     */
    public function updateCategorie(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'designation' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = Category::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'Catégorie non trouvée.'
            ], 404);
        }

        $data->designation = $request->designation;
        $data->save();

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 200
        ]);
    }

    /**
     * @OA\Delete(
     * path="/api/category.delete/{id}",
     * summary="Delete",
     * description="Suppression d'une catégorie",
     * security={{ "bearerAuth":{ }}},
     * operationId="deleteCategorie",
     * tags={"Domaine"},
     * @OA\Parameter(
     *    name="id",
     *    in="path",
     *    required=true,
     *    description="ID de la catégorie",
     *    @OA\Schema(type="integer")
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Suppression réussie",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Catégorie non trouvée",
     * )
     * )
     */
    public function deleteCategorie($id)
    {
        $data = Category::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'Catégorie non trouvée.'
            ], 404);
        }

        $data->delete();

        return response()->json([
            'message' => 'Suppression réussie',
            'success' => true,
            'status' => 200
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/domaine.store",
     *     operationId="storeDomaine",
     *     summary="Créer un nouveau",
     *     tags={"Domaine"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"title","description","category_id"},
     *                 @OA\Property(property="title", type="string", example="Jean Dupont"),
     *                 @OA\Property(property="description", type="string", example="Développeur"),
     *                 @OA\Property(property="category_id", type="integer", example="+243970000000"),
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

    public function storeDomaine(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }
        if ($request->hasFile('image')) {
            $image['image'] = $request->file('image')->store('domaine', 'public');
        }

        $data = new Domaine();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        $data->image = $image['image'] ?? null;
        $data->save();
        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 201
        ]);
    }
    /**
     * @OA\Post(
     *     path="/api/domaine.update/{id}",
     *     operationId="updateDomaine",
     *     summary="Modifier un domaine existant",
     *     tags={"Domaine"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID du domaine à modifier"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         request="domaine_update",
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"title","description","category_id"},
     *                 @OA\Property(property="title", type="string", example="Jean Mis à jour"),
     *                 @OA\Property(property="description", type="string", example="Développeur senior"),
     *                 @OA\Property(property="category_id", type="integer", example="2"),
     *                 @OA\Property(
     *                     property="image",
     *                     type="string",
     *                     format="binary",
     *                     description="Nouvelle image (facultatif)"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Domaine mis à jour avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Domaine introuvable"
     *     )
     * )
     */
    public function updateDomaine(Request $request, $id)
    {
        $data = Domaine::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'Domaine introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $validated = $validator->validated();

        // ✅ Gestion de l'image
        if ($request->hasFile('image')) {
            if ($data->image && Storage::disk('public')->exists($data->image)) {
                Storage::disk('public')->delete($data->image);
            }
            $validated['image'] = $request->file('image')->store('domaine', 'public');
        } else {
            unset($validated['image']); // on garde l’ancienne image
        }

        $data->update($validated);

        return response()->json([
            'message' => 'Mise à jour réussie',
            'success' => true,
            'status' => 200
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/domaine.delete/{id}",
     *     operationId="deleteDomaine",
     *     summary="Supprimer un domaine",
     *     tags={"Domaine"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID du domaine à supprimer"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Domaine supprimé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Domaine supprimé avec succès"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="status", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Domaine introuvable"
     *     )
     * )
     */
    public function deleteDomaine($id)
    {
        $data = Domaine::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'Domaine introuvable',
                'success' => false,
                'status' => 404
            ], 404);
        }

        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::disk('public')->delete($data->image);
        }

        $data->delete();

        return response()->json([
            'message' => 'Domaine supprimé avec succès',
            'success' => true,
            'status' => 200
        ]);
    }
}
