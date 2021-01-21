<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratModel extends Model
{
    protected $table = "tbl_syarat";
    protected $primary_key = "id_syarat";    

    public function type()
    {
        return $this->belongsTo('App\Models\TypeModel', 'id_type', 'id_type');
    }
}
