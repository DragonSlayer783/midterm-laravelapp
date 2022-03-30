<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipmentinfo extends Model
{
    use HasFactory;

    protected $fillable = ['name','model_year', 'speed', 'manu_id'
    ,'customer_id','purchase_id'];
    protected $table = 'equipmentinfo';
}


