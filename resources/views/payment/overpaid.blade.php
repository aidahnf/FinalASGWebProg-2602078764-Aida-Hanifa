@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Overpayment Detected') }}</div>

                <div class="card-body">
                    <p>Sorry, you overpaid {{ number_format($overpaidAmount, 2) }}. Would you like to add the extra amount to your wallet as coins?</p>

                    <form method="POST" action="{{ route('payment.addToWallet') }}">
                        @csrf
                        <input type="hidden" name="overpaid_amount" value="{{ $overpaidAmount }}">

                        <div class="form-group">
                            <button type="submit" name="add_to_wallet" value="yes" class="btn btn-success">
                                Yes, Add to Wallet
                            </button>
                            <button type="submit" name="add_to_wallet" value="no" class="btn btn-danger">
                                No, Please Enter Correct Amount
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
