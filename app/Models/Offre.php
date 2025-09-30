<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 *     schema="Offre",
 *     type="object",
 *     title="Offre",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="intitule", type="string", example="Développement Web"),
 *     @OA\Property(property="description", type="string", example="Appel d’offre pour création d’un site web"),
 *     @OA\Property(property="nature", type="string", example="Consultation"),
 *     @OA\Property(property="numero_offres", type="string", example="OFF-2025-001"),
 *     @OA\Property(property="secteur_activite", type="string", example="Informatique"),
 *     @OA\Property(property="date_publication", type="string", format="date", example="2025-09-01"),
 *     @OA\Property(property="date_limite", type="string", format="date", example="2025-10-01"),
 *     @OA\Property(property="zone_execution", type="string", example="Kinshasa"),
 *     @OA\Property(property="fichier", type="string", example="storage/offres/offre1.pdf"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-09-30T12:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-09-30T12:00:00Z")
 * )
 */

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
        'description',
        'numero_offres',
        'secteur_activite',
        'date_publication',
        'date_limite',
        'zone_execution',
        'nature',
        'fichier'
    ];
}
