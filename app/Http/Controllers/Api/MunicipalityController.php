<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MunicipalityResource;
use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    public function index()
    {
        return MunicipalityResource::collection(Municipality::paginate(15));
    }

    public function show(Municipality $municipality)
    {
        return new MunicipalityResource($municipality);
    }

    public function getByState($state)
    {
        $municipalities = Municipality::where('state_id', $state)->get();
        return MunicipalityResource::collection($municipalities);
    }

}
