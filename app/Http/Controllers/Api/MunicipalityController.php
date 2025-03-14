<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MunicipalityCollection;
use App\Http\Resources\MunicipalityResource;
use App\Models\Municipality;
use App\Models\State;
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

    public function getByState(Request $request)
    {
        if ($request->search_by == null) {
            return response()->json(['message' => 'Se requiere especificar el modo de búsqueda'], 400);
        }

        if ($request->search_by == 'all') {
            $municipalities = Municipality::all();
            return MunicipalityResource::collection($municipalities);
        }

        if ($request->search_by == 'name') {

            if ($request->name == null) {
                return response()->json(['message' => 'Se requiere especificar el nombre del estado'], 400);
            }

            $related_state = State::where('name', 'like', '%' . $request->name . '%')->first();

            $municipalities = Municipality::where('state_id', $related_state->id)->get();
            return new MunicipalityCollection($municipalities);
        }

        if ($request->search_by == 'id') {

            if ($request->id == null) {
                return response()->json(['message' => 'Se requiere especificar el ID del estado'], 400);
            }

            $municipalities = Municipality::where('state_id', $request->search_by)->get();
            return MunicipalityResource::collection($municipalities);
        }
    }

}
