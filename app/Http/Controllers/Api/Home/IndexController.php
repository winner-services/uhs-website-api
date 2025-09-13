<?php

namespace App\Http\Controllers\Api\Home;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Message;
use App\Models\Parternaire;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/count.index",
     *      operationId="count",
     *      tags={"Dashboard"},
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
    public function count(){
        $messageCount = Message::count();
        $temoignageCount = Temoignage::count();
        $actualiteCount = Event::count();
        $patnerCount = Parternaire::count();
        return response()->json([
            'messageCount' =>$messageCount,
            'temoignageCount' =>$temoignageCount,
            'actualiteCount'=>$actualiteCount,
            'partenaireCount'=>$patnerCount
        ]);
    }
}
