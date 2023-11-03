<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ecos extends Model
{
    use HasFactory;
    public $table = "ecos";
    protected $fillable = ['kode', 'nama', 'harga'];

}
