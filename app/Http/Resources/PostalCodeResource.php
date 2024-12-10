<?php

namespace App\Http\Resources;

use App\Models\PostalCode;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin PostalCode */
class PostalCodeResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'postal_code' => $this->postal_code,
            'settlement_name' => $this->settlement_name,
            'settlement_type' => $this->settlement_type,

            'municipality_id' => $this->municipality_id,
            'state_id' => $this->state_id,

            'municipality' => new MunicipalityResource($this->whenLoaded('municipality')),
            'state' => new StateResource($this->whenLoaded('state')),
        ];
    }
}
