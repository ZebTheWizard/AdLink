<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use Traits\Uid;

    public $incrementing = false;

    protected $fillable = ["id", "link", "alias"];
}
