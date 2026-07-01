<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Campaign;

class DonationController extends Controller
{
    public function create()
    {
        $campaigns = Campaign::all();

        return view('donasi', compact('campaigns'));
    }

    public function store(Request $request)
{
    $donation = Donation::create([
        'campaign_id'    => $request->campaign_id,
        'donor_name'     => $request->donor_name,
        'bank_name'      => $request->bank_name,
        'account_number' => $request->account_number,
        'account_holder' => $request->account_holder,
        'amount'         => $request->amount,
        'message'        => $request->message,
    ]);

    $campaign = Campaign::find($request->campaign_id);

    $campaign->collected_donation += $request->amount;
    $campaign->save();

    return view('donasi_sukses', compact('donation', 'campaign'));
}
}