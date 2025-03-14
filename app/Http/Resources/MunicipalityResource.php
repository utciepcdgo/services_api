<?php

namespace App\Http\Resources;

use App\Models\Municipality;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Municipality */
class MunicipalityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'state_id' => $this->state_id,
            'state' => new StateResource($this->whenLoaded('state')),
        ];
    }
}
