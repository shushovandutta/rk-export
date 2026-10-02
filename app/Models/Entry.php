<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = ['id', 'project_id', 'entry_date', 'voucher_number', 'lot', 'bag', 'payment_method', 'category', 'qty', 'rate', 'bill_amount', 'advance', 'due', 'total', 'created_at', 'updated_at'];
}