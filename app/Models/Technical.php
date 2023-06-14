<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    protected $table = "technical";
    protected $fillable = [
        "firts_name",
        "last_name",
        "email",
        "token",
        "strong_points",
        "type_document",
        "nro_document",
        "number_phone",
        "contract_start",
        "contract_end"
    ];
}
