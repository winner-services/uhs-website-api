<?php

namespace App\Http\Controllers\website\Domaine;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Domaine;

class DomaineController extends Controller
{
    public function domaineIndex(){
        $data = About::first();
        $domaine = Domaine::join('categories', 'domaines.category_id', 'categories.id')
            ->select('domaines.*', 'categories.designation as category')
            ->get();
        return view('pages.domaines.domaines', compact('data','domaine'));
    }

    public function domaineDetails($id){
        $data = About::first();
        $domaine = Domaine::join('categories', 'domaines.category_id', 'categories.id')
            ->select('domaines.*', 'categories.designation as category')
            ->where('domaines.id',$id)
            ->firstOrFail();
         $Alldomaine = Domaine::join('categories', 'domaines.category_id', 'categories.id')
            ->select('domaines.*', 'categories.designation as category')
            ->get();
        return view('pages.domaines.domaineDetail', compact('data','domaine','Alldomaine'));
    }
}
