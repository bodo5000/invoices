<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'due_date',
        'product_name',
        'section_id',
        'created_by',
        'updated_by',
        'amount_collection',
        'commission',
        'discount',
        'rate_vat',
        'value_vat',
        'total',
        'status',
        'notes',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
