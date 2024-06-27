<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;
    protected $fillable = [
        'commission',
        'minimum_withdrawal_amount',
        'payout_payment_methods',
        'allow_commission_continuously',
        'enable_affiliate_system',
        'store_id',
        'created_by',
    ];

    protected $casts = [
        'allow_commission_continuously' => 'boolean',
        'enable_affiliate_system' => 'boolean',
    ];
}
