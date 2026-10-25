<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasUuids;
    protected $fillable = [
        'sales_summary_id',
        'customer_id',
        'item_id',
        'price',
        'discount',
        'quantity',
    ];

    public function salesSummary(){
        return $this->belongsTo(SalesSummary::class, 'sales_summary_id');
    }

    public function salesSummaries(){
        return $this->salesSummary();
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }
}
