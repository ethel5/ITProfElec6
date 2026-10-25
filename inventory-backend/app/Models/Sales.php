<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasUuids;
    protected $fillable = [
        'customer_id',
        'item_id',
        'price',
        'discount',
        'quantity',
    ];

    public function salesSummaries(){
        return $this->belongsTo(SalesSummary::class, 'sales_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }
}
