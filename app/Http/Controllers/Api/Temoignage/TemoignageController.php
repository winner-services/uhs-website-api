<?php

namespace App\Http\Controllers\Api\Temoignage;

use App\Http\Controllers\Controller;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemoignageController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/temoignage.index",
     *      operationId="getTemoignage",
     *      tags={"Temoignage"},
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
    public function getTemoignage()
    {
        $data = Temoignage::inRandomOrder()->get();

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
     * path="/api/temoignage.store",
     * summary="Create",
     * description="Creation",
     * security={{ "bearerAuth":{ }}},
     * operationId="storeTemoignage",
     * tags={"Temoignage"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Enregistrer",
     *    @OA\JsonContent(
     *       required={"name","function","description"},
     *       @OA\Property(property="name", type="string", format="text",example="winner kambale"),
     *       @OA\Property(property="function", type="string", format="text",example="rdc"),
     *       @OA\Property(property="lien_youtube", type="string", format="text",example="https://www.youtube.com/watch?v=RvreULjnzFo"),
     *       @OA\Property(property="description", type="string", format="text",example="2024-09-19")
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
    public function storeTemoignage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'function' => 'nullable',
            'description' => 'required',
            'lien_youtube' => 'nullable'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }
        Temoignage::create($request->all());

        $result = [
            'message' => "success",
            'success' => true,
            'status' => 201
        ];
        return response()->json($result);
    }
    /**
     * @OA\Put(
     * path="/api/temoignage.update/{id}",
     * summary="Update",
     * description="Modification",
     * security={{ "bearerAuth":{ }}},
     * operationId="updateTemoignage",
     * tags={"Temoignage"},
     * @OA\Parameter(
     *    name="id",
     *    in="path",
     *    required=true,
     *    @OA\Schema(type="integer")
     * ),
     * @OA\RequestBody(
     *    required=false,
     *    description="Modifier",
     *    @OA\JsonContent(
     *       required={"name","function","description"},
     *       @OA\Property(property="name", type="string", format="text",example="winner kambale"),
     *       @OA\Property(property="function", type="string", format="text",example="rdc"),
     *       @OA\Property(property="lien_youtube", type="string", format="text",example="https://www.youtube.com/watch?v=RvreULjnzFo"),
     *       @OA\Property(property="description", type="string", format="text",example="2024-09-19")
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="success",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Temoignage not found",
     * ),
     * @OA\Response(
     *    response=422,
     *    description="Validation error",
     * )
     * )
     */
    public function updateTemoignage(Request $request, $id)
    {
        $temoignage = Temoignage::find($id);

        if (!$temoignage) {
            return response()->json(['message' => 'Temoignage not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'function' => 'nullable',
            'description' => 'required',
            'lien_youtube' => 'nullable'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }
        $temoignage->update([
            'name' => $request->name,
            'function' => $request->function,
            'description' => $request->description,
            'lien_youtube' => $request->lien_youtube
        ]);

        $result = [
            'message' => "success",
            'success' => true,
            'status' => 200
        ];

        return response()->json($result);
    }

    /**
     * @OA\Delete(
     * path="/api/temoignage.delete/{id}",
     * summary="Delete",
     * description="Suppression",
     * security={{ "bearerAuth":{ }}},
     * operationId="deleteTemoignage",
     * tags={"Temoignage"},
     * @OA\Parameter(
     *    name="id",
     *    in="path",
     *    required=true,
     *    @OA\Schema(type="integer")
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Temoignage deleted successfully",
     * ),
     * @OA\Response(
     *    response=404,
     *    description="Temoignage not found",
     * ),
     * @OA\Response(
     *    response=401,
     *    description="Unauthorized",
     * )
     * )
     */
    public function deleteTemoignage($id)
    {
        $temoignage = Temoignage::find($id);

        if (!$temoignage) {
            return response()->json(['message' => 'Temoignage not found'], 404);
        }
        $temoignage->delete();

        return response()->json([
            'message' => "Temoignage deleted successfully",
            'success' => true,
            'status' => 200
        ]);
    }
}
