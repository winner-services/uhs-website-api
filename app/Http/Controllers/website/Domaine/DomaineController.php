<?php

namespace App\Http\Controllers\website\Domaine;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Domaine;
use App\Models\Event;

class DomaineController extends Controller
{
    public function domaineIndex()
    {
        $data = About::first();
        $domaine = Domaine::join('categories', 'domaines.category_id', 'categories.id')
            ->select('domaines.*', 'categories.designation as category')
            ->get();
        $twoEvents = Event::latest()->take(2)->get();
        return view('pages.domaines.domaines', compact('data', 'domaine', 'twoEvents'));
    }

    public function domaineDetails($id)
    {
        $data = About::first();
        $domaine = Domaine::join('categories', 'domaines.category_id', 'categories.id')
            ->select('domaines.*', 'categories.designation as category')
            ->where('domaines.id', $id)
            ->firstOrFail();
        $Alldomaine = Domaine::join('categories', 'domaines.category_id', 'categories.id')
            ->select('domaines.*', 'categories.designation as category')
            ->get();
        $twoEvents = Event::latest()->take(2)->get();
        return view('pages.domaines.domaineDetail', compact('data', 'domaine', 'Alldomaine', 'twoEvents'));
    }
}
