<?php

namespace App\Http\Controllers\Api\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/about.index",
     *      operationId="index",
     *      tags={"About"},
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
    public function index()
    {
        $data = About::latest()->first();
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
     *     path="/api/about.store",
     *     operationId="create",
     *     summary="Créer un nouvel About",
     *     tags={"About"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"title", "description", "objective", "phone", "email", "experience"},
     *                 @OA\Property(property="title", type="string", example="Qui sommes-nous ?"),
     *                 @OA\Property(property="description", type="string", example="Notre entreprise existe depuis..."),
     *                 @OA\Property(property="objective", type="string", example="Fournir un service de qualité"),
     *                 @OA\Property(property="address", type="string", example="Kinshasa, RDC"),
     *                 @OA\Property(property="instagram", type="string", example="https://instagram.com/entreprise"),
     *                 @OA\Property(property="facebook", type="string", example="https://facebook.com/entreprise"),
     *                 @OA\Property(property="twitter", type="string", example="https://twitter.com/entreprise"),
     *                 @OA\Property(property="linkedin", type="string", example="https://linkedin.com/company/entreprise"),
     *                 @OA\Property(property="youtube", type="string", example="https://youtube.com/entreprise"),
     *                 @OA\Property(property="phone", type="string", example="+243 999 888 777"),
     *                 @OA\Property(property="email", type="string", example="contact@example.com"),
     *                 @OA\Property(property="experience", type="string", example="10 ans d'expérience"),
     *                 @OA\Property(property="image1", type="string", format="binary"),
     *                 @OA\Property(property="image2", type="string", format="binary"),
     *                 @OA\Property(property="bannier_image", type="string", format="binary")
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
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'objective' => 'required|string',
            'address' => 'nullable|string|max:150',
            'instagram' => 'nullable|string|max:150',
            'facebook' => 'nullable|string|max:150',
            'twitter' => 'nullable|string|max:150',
            'linkedin' => 'nullable|string|max:150',
            'youtube' => 'nullable|string|max:150',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:150',
            'experience' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bannier_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('about', 'public');
        }

        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('about', 'public');
        }

        if ($request->hasFile('bannier_image')) {
            $data['bannier_image'] = $request->file('bannier_image')->store('bannier_about', 'public');
        }

        About::create($data);

        return response()->json([
            'message' => 'success',
            'success' => true,
            'status' => 201
        ], 201);
    }

    /**
     * @OA\Post(
     *     path="/api/about.update/{id}",
     *     operationId="update",
     *     summary="Mettre à jour un About",
     *     tags={"About"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de l'élément à modifier",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="title", type="string"),
     *                 @OA\Property(property="description", type="string"),
     *                 @OA\Property(property="objective", type="string"),
     *                 @OA\Property(property="address", type="string"),
     *                 @OA\Property(property="instagram", type="string"),
     *                 @OA\Property(property="facebook", type="string"),
     *                 @OA\Property(property="twitter", type="string"),
     *                 @OA\Property(property="linkedin", type="string"),
     *                 @OA\Property(property="youtube", type="string"),
     *                 @OA\Property(property="phone", type="string"),
     *                 @OA\Property(property="email", type="string"),
     *                 @OA\Property(property="experience", type="string"),
     *                 @OA\Property(property="image1", type="string", format="binary"),
     *                 @OA\Property(property="image2", type="string", format="binary"),
     *                 @OA\Property(property="bannier_image", type="string", format="binary")
     *             )
     *         )
     *     ),
     *     @OA\Response(response=200, description="Mise à jour réussie"),
     *     @OA\Response(response=404, description="Ressource introuvable"),
     *     @OA\Response(response=422, description="Données invalides")
     * )
     */
    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'objective' => 'required|string',
            'address' => 'nullable|string|max:150',
            'instagram' => 'nullable|string|max:150',
            'facebook' => 'nullable|string|max:150',
            'twitter' => 'nullable|string|max:150',
            'linkedin' => 'nullable|string|max:150',
            'youtube' => 'nullable|string|max:150',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:150',
            'experience' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bannier_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données envoyées ne sont pas valides.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        // ✅ Image1
        if ($request->hasFile('image1')) {
            if ($about->image1 && Storage::disk('public')->exists($about->image1)) {
                Storage::disk('public')->delete($about->image1);
            }
            $data['image1'] = $request->file('image1')->store('about', 'public');
        } else {
            $data['image1'] = $about->image1; // garder l’ancienne
        }

        // ✅ Image2
        if ($request->hasFile('image2')) {
            if ($about->image2 && Storage::disk('public')->exists($about->image2)) {
                Storage::disk('public')->delete($about->image2);
            }
            $data['image2'] = $request->file('image2')->store('about', 'public');
        } else {
            $data['image2'] = $about->image2;
        }

        // ✅ Bannier
        if ($request->hasFile('bannier_image')) {
            if ($about->bannier_image && Storage::disk('public')->exists($about->bannier_image)) {
                Storage::disk('public')->delete($about->bannier_image);
            }
            $data['bannier_image'] = $request->file('bannier_image')->store('bannier_about', 'public');
        } else {
            $data['bannier_image'] = $about->bannier_image;
        }

        $about->update($data);

        return response()->json([
            'message' => 'Mise à jour réussie',
            'success' => true,
            'status' => 200
        ], 200);
    }
}
