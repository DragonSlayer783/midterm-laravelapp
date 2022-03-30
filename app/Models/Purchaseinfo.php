<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaseinfo extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_num','price', 'purchase_date','equipment_id'];

    protected $table = 'purchaseinfo';
    
    
}

