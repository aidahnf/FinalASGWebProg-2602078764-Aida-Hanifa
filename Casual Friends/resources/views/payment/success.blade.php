@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 8px; border: none; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <div class="card-header text-center" style="background-color: #BBDEFB; color: #0D47A1; font-size: 24px; font-weight: bold;">
                    {{ __('Payment Successful') }}
                </div>

                <div class="card-body" style="background-color: #E3F2FD; padding: 30px; text-align: center;">
                    <p style="font-size: 18px; color: #0D47A1; margin-bottom: 20px;">
                        Your payment has been successfully processed. Thank you for registering!
                    </p>
                    <a href="{{ url('/') }}" class="btn btn-primary" style="background-color: #0D47A1; border: none; padding: 10px 20px; border-radius: 6px; font-size: 16px;">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
