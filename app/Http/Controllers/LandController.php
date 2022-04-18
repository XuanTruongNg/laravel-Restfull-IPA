<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandController extends Controller
{
    public function store(Request $request){
        $land = new Land;

        $land->location = $request->location;
        $land->area = $request->area;
        $land->price= $request->price;
        $land->land_disc= $request->land_disc;
        $land->document_id= $request->document_id;
        $land->for_sale= true;
        $land->owner_id= $request->owner_id;
        $land->save();
        $land->id = $land->getKey();
        return response()->json($land,200);

    }

}
