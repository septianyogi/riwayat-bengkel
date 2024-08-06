<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Serviceitem;

class ServiceController extends Controller
{
    public function show() {
        $service = Service::with('services')->get();

        return response()->json([
            'data' => $service
        ],200);
    }

    public function searchPlat($plat) {
        $service = Service::with('services')->where('no_plat', 'like', '%'.$plat.'%')->get();

        if(count($service)>0){
            return response()->json([
                'data' => $service
            ],200);
        } else {
            return response()->json([
                'message' => 'not found',
                'data' => $service
            ],404);
        }
    }

    public function store(Request $request) {
        $plat = $request['no_plat'];

        $mobil = Service::where('no_plat', $plat)->first();
        if(! $mobil) {
            Service::create($request->all());
        }

        $serviceitem = Serviceitem::create($request->all());

        return response()->json([
            'message' => 'data has been added',
            'data' => $serviceitem
        ],200);

    }

    public function latestAdd() {
        $service = Service::with('services')->get();

        return response()->json([
            'data' => $service
        ],200);
    }
}
