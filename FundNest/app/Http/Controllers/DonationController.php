<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use Midtrans\Config;
use Midtrans\Snap;

class DonationController extends Controller
{
    public function index($id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('donate', compact('campaign'));
    }

    public function process(Request $request, $id)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $campaign = Campaign::findOrFail($id);
        $transactionDetails = [
            'order_id' => 'CAMP-' . uniqid(),
            'gross_amount' => $request->amount,
        ];

        $itemDetails = [
            [
                'id' => $campaign->id,
                'price' => $request->amount,
                'quantity' => 1,
                'name' => $campaign->name,
            ],
        ];

        $customerDetails = [
            'first_name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ];

        $params = [
            'transaction_details' => $transactionDetails,
            'item_details' => $itemDetails,
            'customer_details' => $customerDetails,
        ];

        try {
            $paymentUrl = Snap::createTransaction($params)->redirect_url;
            return redirect($paymentUrl);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
