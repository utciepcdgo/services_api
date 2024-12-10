<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        return StateResource::collection(State::all());
    }

    public function show(State $state)
    {
        return new StateResource($state);
    }


}
