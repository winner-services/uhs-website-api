<?php

namespace App\Http\Controllers\Api\Donation;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationControlleer extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/donation.index",
     *      operationId="indexDonation",
     *      tags={"Donation"},
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
    public function indexDonation()
    {
        $page = request("paginate", 10);

        $donations = Donation::latest()->paginate($page);

        return response()->json([
            'success' => true,
            'status' => 200,
            'data'    => $donations
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/donation.delete/{id}",
     *     operationId="destroyDonate",
     *     summary="Supprimer",
     *     tags={"Donation"},
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
    public function destroyDonate($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return response()->json([
            'success' => true,
            'message' => 'Don supprimé avec succès'
        ]);
    }
}
