@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #BBDEFB; color: #0D47A1; font-size: 24px; font-weight: bold;">
                    {{ __('Register') }}</div>

                <div class="card-body" style="background-color: #E3F2FD; padding: 30px;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="row mb-2">
                            <!-- Name and Email -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus style="border-radius: 6px;">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required style="border-radius: 6px;">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <!-- Password and Confirm Password -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required style="border-radius: 6px;">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="border-radius: 6px;">
                                </div>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="form-group mb-2">
                            <label for="gender">{{ __('Gender') }}</label>
                            <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                                <option value="">{{ __('Select Gender') }}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Instagram -->
                        <div class="form-group mb-2">
                            <label for="instagram">{{ __('Instagram Username (URL)') }}</label>
                            <input id="instagram" type="url" class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="https://www.instagram.com/username" value="{{ old('instagram') }}" required>
                            @error('instagram')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Mobile -->
                        <div class="form-group mb-2">
                            <label for="mobile">{{ __('Mobile Number') }}</label>
                            <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required>
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Hobbies -->
                        <div class="form-group mb-2">
                            <label for="hobbies">{{ __('Hobbies (minimum 3, separated by commas)') }}</label>
                            <input id="hobbies" type="text" class="form-control @error('hobbies') is-invalid @enderror" name="hobbies" placeholder="e.g., Reading, Hiking, Gaming" value="{{ old('hobbies') }}" required>
                            @error('hobbies')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div> 

                        <div class="row mb-4">
                            <!-- Age and Friendship Intent -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">{{ __('Age') }}</label>
                                    <input type="number" id="age" name="age" class="form-control" min="18" max="35" required style="border-radius: 6px;">
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="friendship_intent">{{ __('What are you looking for?') }}</label>
                                    <select id="friendship_intent" name="friendship_intent" class="form-control" required style="border-radius: 6px;">
                                        <option value="">{{ __('Select Option') }}</option>
                                        <option value="casual_friendships">Casual Friendships</option>
                                        <option value="relationships">Relationships</option>
                                        <option value="business_networking">Business Networking</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Registration Fee -->
                        <div class="form-group col-12 text-center mb-4" style="background-color: #bdc4e6; padding: 15px; border-radius: 8px; border: 1px solid #001164;">
                            <label for="registration_fee" style="font-weight: bold; color: #001164;">{{ __('Registration Fee') }}</label>
                            <input id="registration_fee" type="number" class="form-control text-center" name="registration_fee" value="{{ rand(100000, 125000) }}" readonly style="border-radius: 6px; background-color: #e7e7fb; font-weight: bold; color: #1e2d69;">
                        </div>
                    

                        <!-- Submit Button -->
                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
