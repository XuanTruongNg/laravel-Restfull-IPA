<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class land extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='land';
    protected $fillable=["id","location","area","price","land_disc","document_id","for_sale","owner_id"];

}
