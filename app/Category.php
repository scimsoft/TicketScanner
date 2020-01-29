<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name', 'desription', 'active', 'image'
    ];

    public function tickets(){
        return $this->hasMany(Tickets::class);
    }
}
