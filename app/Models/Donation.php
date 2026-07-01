<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
   protected $fillable = [
    'campaign_id',
    'donor_name',
    'bank_name',
    'account_number',
    'account_holder',
    'amount',
    'message',
];
    // Donasi ini dikirim untuk (belongsTo) Campaign yang mana?
    public function campaign()
    {
    return $this->belongsTo(Campaign::class);
    }
}