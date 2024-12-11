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
            'municipality' => $this->municipality,
            'state' => $this->state,
            'city' => $this->city,
        ];
    }
}
