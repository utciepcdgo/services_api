<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostalCodeResource;
use App\Models\PostalCode;
use Illuminate\Http\Request;

class PostalCodeController extends Controller
{
    public function index()
    {
        return PostalCodeResource::collection(PostalCode::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'postal_code' => ['required'],
            'settlement_name' => ['required'],
            'settlement_type' => ['required'],
            'municipality_id' => ['required', 'exists:municipalities'],
            'state_id' => ['required', 'exists:states'],
        ]);

        return new PostalCodeResource(PostalCode::create($data));
    }

    public function show(PostalCode $postalCode)
    {
        return new PostalCodeResource($postalCode);
    }

    public function update(Request $request, PostalCode $postalCode)
    {
        $data = $request->validate([
            'postal_code' => ['required'],
            'settlement_name' => ['required'],
            'settlement_type' => ['required'],
            'municipality_id' => ['required', 'exists:municipalities'],
            'state_id' => ['required', 'exists:states'],
        ]);

        $postalCode->update($data);

        return new PostalCodeResource($postalCode);
    }

    public function destroy(PostalCode $postalCode)
    {
        $postalCode->delete();

        return response()->json();
    }

    public function getByPostalCode($postalCode)
    {
        $postal_codes = PostalCode::where('postal_code', $postalCode)->get();
        return PostalCodeResource::collection($postal_codes);
    }
}
