<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardBin extends Model
{
    protected $fillable = [
        'prefix', 'company', 'cardType'
    ];
}
