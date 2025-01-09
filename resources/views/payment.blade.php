@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Payment Page') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('payment.store') }}">
                        @csrf

                        <!-- Displaying the Registration Fee -->
                        <div class="form-group">
                            <label for="registration_fee">{{ __('Registration Fee') }}</label>
                            <input id="registration_fee" type="number" class="form-control" name="registration_fee" value="{{ Session::get('registration_fee') }}" readonly>
                        </div>

                        <!-- Payment Amount -->
                        <div class="form-group mb-4">
                            <label for="paid_amount">{{ __('Enter Amount Paid') }}</label>
                            <input id="paid_amount" type="number" class="form-control @error('paid_amount') is-invalid @enderror" name="paid_amount" value="{{ old('paid_amount') }}" required>
                            @error('paid_amount')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Proceed to Payment') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
