@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">{{ __('notif.notifications') }}</h2>

    @if($noNotifications)
        <div class="alert alert-info text-center">
            {{ __('notif.no_notifications') }}
        </div>
    @else
        <h3 class="mb-3 text-center">{{ __('notif.friend_requests') }}</h3>

        <div class="row">
            @foreach($friendRequests as $request)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm" style="background-color: #e3f2fd; border-radius: 15px;">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">{{ $request->user->name }}</h5>
                            <p class="card-text text-muted mb-3">{{ $request->user->email }}</p>
                            <form action="{{ route('wishlist.remove', $request->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger">{{ __('notif.accept') }}</button>
                            </form>                    
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h3 class="mb-3 text-center">{{ __('notif.incoming_messages') }}</h3>
        <div class="row">
            @foreach($incomingMessages as $message)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm" style="background-color: #e3f2fd; border-radius: 15px;">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">{{ __('notif.from') }}: {{ $message->sender->name }}</h5>
                            <p class="card-text mb-3">{{ $message->content }}</p>
                            <a href="{{ route('chat.start', $message->sender->id) }}" class="btn btn-primary">{{ __('notif.reply') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<style>
    body {
        background-color: #f8f9fa;
    }
    .card-title {
        font-weight: bold;
        color: #0d6efd;
    }
    .card {
        border-radius: 15px;
        border: none;
        transition: transform 0.2s;
    }
    .card:hover {
        transform: scale(1.03);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .btn {
        font-size: 0.9rem;
    }
</style>
@endsection