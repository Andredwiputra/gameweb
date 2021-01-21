<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    // Definisi tabel di model
    protected $table = "tbl_type";
    protected $primary_key = "id_type";    
}
