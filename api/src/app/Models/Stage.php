<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;


    protected $guarded = [
        'id'//idだけ変更できないようにする
    ];

    //
    public function cells()
    {
        return $this->hasMany(StageCell::class);
    }

}
