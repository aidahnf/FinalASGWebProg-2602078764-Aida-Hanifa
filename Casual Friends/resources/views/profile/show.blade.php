@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center fw-bold text-primary mb-5">@lang('profile.heading')</h1>

    <!-- Profile Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 p-4 rounded-4">
                <div class="row">
                    <!-- Profile Info -->
                    <div class="col-md-5 text-center border-end">
                        @if ($authUser->profile_photo)
                            <img src="{{ asset('up/profile_photos/' . $authUser->profile_photo) }}" 
                                 alt="Profile Photo" 
                                 class="rounded-circle mb-4 border" width="150" height="150">
                        @else
                            <img src="{{ $authUser->avatar ? $authUser->avatar->image_url : asset('default_profile_photo.png') }}" 
                                 alt="Default Avatar" 
                                 class="rounded-circle mb-4 border" width="150" height="150">
                        @endif
                        <h2 class="fw-bold text-primary">{{ $authUser->name }}</h2>
                        <p class="text-muted">{{ $authUser->email }}</p>
                        <p class="text-muted">{{ $authUser->gender }}</p>
                        <p class="text-muted mb-1">{{ ucwords(str_replace('_', ' ', $authUser->friendship_intent)) }}</p>
                        <p class="text-muted">{{ implode(', ', json_decode($authUser->hobbies, true)) }}</p>
                    </div>

                    <!-- Update Profile Photo and Avatar -->
                    <div class="col-md-7">
                        <div class="d-flex justify-content-center align-items-center" style="min-height: 300px;">
                        <div class="row g-4 ">
                            <!-- Update Profile Photo -->
                            <div class="col-md-6">
                                <h5 class="fw-bold text-primary">@lang('profile.update_photo')</h5>
                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group" style="margin-bottom: 39px;">
                                        <input type="file" name="profile_photo" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3 w-100">@lang('profile.update_photo')</button>
                                </form>
                            </div>

                            <!-- Select Avatar -->
                            <div class="col-md-6">
                                <h5 class="fw-bold text-primary">@lang('profile.select_avatar')</h5>
                                <form action="{{ route('profile.update.avatar') }}" method="POST">
                                    @csrf
                                    <select name="avatar_id" id="avatar_id" class="form-select mb-3">
                                        @foreach ($purchasedAvatars as $avatar)
                                            <option value="{{ $avatar->id }}" 
                                                {{ $authUser->avatar_id == $avatar->id ? 'selected' : '' }}>
                                                Avatar #{{ $avatar->id }} - {{ $avatar->price }} Coins
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="replace_photo" id="replace_photo" value="1">
                                        <label class="form-check-label" for="replace_photo">
                                            @lang('profile.replace_photo')
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">@lang('profile.set_avatar')</button>
                                </form>
                            </div>
                        </div>     
                        </div>

                        <!-- Logout Form -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="mt-4">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100">@lang('profile.logout')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Friends Section -->
    <h2 class="text-center fw-bold text-primary mb-4">@lang('profile.friends')</h2>
    <div class="row">
        @forelse ($mutualFriends as $friend)
            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-3 rounded-3">
                    <div class="text-center">
                        @if ($friend->profile_photo)
                            <img src="{{ asset('up/profile_photos/' . $friend->profile_photo) }}" 
                                 alt="@lang('profile.profile_photo')" 
                                 class="rounded-circle mb-3 border" width="100" height="100">
                        @else
                            <img src="{{ asset('default_profile_photo.png') }}" 
                                 alt="@lang('profile.default_profile_photo')" 
                                 class="rounded-circle mb-3 border" width="100" height="100">
                        @endif
                        <h5 class="fw-bold text-primary">{{ $friend->name }}</h5>
                        <p class="text-muted">{{ $friend->email }}</p>
                        <p class="text-muted">{{ $friend->gender }}</p>
                        <p class="text-muted">{{ ucwords(str_replace('_', ' ', $friend->friendship_intent)) }}</p>
                        <p class="text-muted">
                            {{ implode(', ', json_decode($friend->hobbies, true) ?? [__('profile.nohobbies')]) }}
                        </p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('chat.start', ['friendId' => $friend->id]) }}" 
                               class="btn btn-success">@lang('profile.chat')</a>
                            <form action="{{ route('profile.remove', ['friendId' => $friend->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">@lang('profile.remove')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted text-center">@lang('profile.nofriends')</p>
        @endforelse
    </div>
</div>

<style>
    body {
        background-color: #f8fbff;
    }

    .card {
        background: #e7f0fc;
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #5b9bd5;
        border: none;
    }

    .btn-primary:hover {
        background-color: #4a8bc2;
    }

    .btn-danger {
        background-color: #f27474;
        border: none;
    }

    .btn-danger:hover {
        background-color: #e05c5c;
    }

    .btn-success {
        background-color: #68c3a3;
        border: none;
    }

    .btn-success:hover {
        background-color: #5aa88f;
    }

    .rounded-circle {
        border: 3px solid #5b9bd5;
    }

    .text-primary {
        color: #5b9bd5 !important;
    }
</style>
@endsection
