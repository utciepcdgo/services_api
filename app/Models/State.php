<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name - Nombre.
 * @property string $abbreviation - Abreviatura.
 * @property string|null $shield - Escudo.
 */
class State extends Model
{
    public $timestamps = false;
    public $table = 'states';
}
