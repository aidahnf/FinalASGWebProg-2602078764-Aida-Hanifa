<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    // Menampilkan halaman pembayaran
    public function index()
    {
        return view('payment'); 
    }

   
    public function store(Request $request)
    {
        $registrationFee = session('registration_fee'); 

        $request->validate([
            'paid_amount' => 'required|numeric',
        ]);

        $paidAmount = $request->paid_amount;

        if ($paidAmount < $registrationFee) {
            $underpaidAmount = $registrationFee - $paidAmount;
            return redirect()->back()->withErrors(['paid_amount' => 'You are still underpaid by ' . number_format($underpaidAmount, 2)]);
        } elseif ($paidAmount > $registrationFee) {
            $overpaidAmount = $paidAmount - $registrationFee;
            
            return view('payment.overpaid', [
                'overpaidAmount' => $overpaidAmount
            ]);
        }

        return redirect()->route('payment.success');
    }


    public function addToWallet(Request $request)
    {
        $overpaidAmount = $request->input('overpaid_amount');
        
        if ($request->has('add_to_wallet') && $request->add_to_wallet === 'yes') {
            // Konversi overpaidAmount ke koin dan tambahkan ke wallet 
            $user = Auth::user();
            $coinAmount = $overpaidAmount * 100; // Pemisalan 1 uang = 100 koin
            $user->wallet_balance += $coinAmount; 
            $user->save();

            return redirect()->route('payment.success')->with('message', 'Payment successful! Your overpayment has been added to your wallet as ' . $coinAmount . ' coins.');
        }

        return redirect()->route('payment.index')->withErrors(['paid_amount' => 'You overpaid by ' . number_format($overpaidAmount, 2) . '. Please enter the correct amount.']);
    }

    public function success()
    {
        return view('payment.success');
    }
}

