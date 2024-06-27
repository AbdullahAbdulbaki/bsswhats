<?php

namespace App\Models;

use App\Models\SubscriptionHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AffiliateEarning extends Model
{
    use HasFactory;

    public function subscriptionHistory()
    {
        return $this->belongsTo(SubscriptionHistory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by', 'id');
    }
}
