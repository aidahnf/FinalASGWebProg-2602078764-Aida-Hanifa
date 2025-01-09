@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <h2 class="text-center mb-2">{{ __('home.get_friends') }}</h2>
            <!-- Gender and Hobby Filter -->
            <div class="col-md-12 mb-5">
                <form method="GET" action="{{ route('home') }}" class="d-flex align-items-center gap-3">
                    <div>
                        <label for="gender" class="form-label">{{ __('home.gender') }}:</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="">{{ __('home.all_gender') }}</option>
                            <option value="Female" {{ request('gender') == 'Female' ? 'selected' : '' }}>{{ __('home.female') }}</option>
                            <option value="Male" {{ request('gender') == 'Male' ? 'selected' : '' }}>{{ __('home.male') }}</option>
                        </select>
                    </div>

                    <div>
                        <label for="hobby" class="form-label">{{ __('home.hobbies') }}:</label>
                        <input type="text" name="hobby" id="hobby" value="{{ request('hobby') }}" placeholder="{{ __('home.enter_hobby') }}" class="form-control">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary mt-3">{{ __('home.filter') }}</button>
                    </div>
                </form>
            </div>

            <!-- Displaying Users -->
            <div class="col-md-12">
                
                <div class="row">

                    @foreach($users as $user)
                        @if($user->id != Auth::id())
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm" style="background-color: #d0e7ff; border: none;">
                                    <div class="text-center">
                                        @if ($user->profile_photo)
                                            <img src="{{ asset('up/profile_photos/' . $user->profile_photo) }}" 
                                                 alt="{{ __('home.profile_photo') }}" 
                                                 class="rounded-circle mb-3 border" width="120" height="120">
                                        @else
                                            <img src="{{ asset('default_profile_photo.png') }}" 
                                                 alt="{{ __('home.default_photo') }}" 
                                                 class="rounded-circle mb-3 border" width="120" height="120">
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">{{ $user->name }}</h5>
                                        <p class="text-muted">{{ $user->email }}</p>
                                        <p class="text-muted mb-1">{{ $user->gender }}</p>
                                        <p class="text-muted mb-1">{{ ucwords(str_replace('_', ' ', $user->friendship_intent)) }}</p>
                                        <p class="text-muted mb-1">{{ implode(', ', json_decode($user->hobbies)) }}</p>

                                        @auth
                                            @if ($user->isMutual)
                                                <a href="{{ route('chat.start', ['friendId' => $user->id]) }}" class="btn btn-success btn-sm">{{ __('home.chat') }}</a>
                                            @elseif ($user->isFollowing)
                                                <button type="button" class="btn btn-secondary btn-sm" disabled>{{ __('home.requested') }}</button>
                                            @else
                                                <form action="{{ route('wishlist.add', $user->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary btn-sm">{{ __('home.request_friend') }}</button>
                                                </form>
                                            @endif
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-info btn-sm">{{ __('home.login_request') }}</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f0f8ff;
        }
        .card {
            border-radius: 15px;
            text-align: center;
            padding: 15px;
        }
        .card-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-label {
            font-weight: bold;
        }
        .text-muted {
            font-size: 0.9rem;
        }
        .btn-sm {
            font-size: 0.8rem;
            padding: 5px 10px;
        }
    </style>
@endsection
