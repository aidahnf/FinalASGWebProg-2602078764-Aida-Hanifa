@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">{{ __('chat.chat_with') }} {{ $friend->name }}</h2>
    <div class="chat-box card shadow-sm border-0" style="border-radius: 15px; background-color: #e8f7ff;">
        <!-- Tempat untuk menampilkan pesan -->
        <div id="messages" class="card-body overflow-auto" style="height: 400px; background-color: #f0f8ff; border-radius: 15px; padding: 20px;">
            @foreach ($messages as $message)
                <div class="mb-3 {{ $message->sender_id == Auth::id() ? 'text-end' : 'text-start' }}">
                    <strong class="d-block" style="font-size: 0.9rem; color: #6c757d;">
                        {{ $message->sender_id == Auth::id() ? __('chat.you') : $friend->name }}
                    </strong>
                    <div class="d-inline-block p-3 rounded-3" style="max-width: 75%; border-radius: 20px; background-color: {{ $message->sender_id == Auth::id() ? '#d3d3d3' : '#4a90e2' }}; color: {{ $message->sender_id == Auth::id() ? '#000' : '#fff' }};">
                        <p class="mb-1">{{ $message->message }}</p>
                    </div>
                    <small class="text-muted d-block mt-1" style="font-size: 0.8rem;">{{ $message->created_at->format('H:i') }}</small>
                </div>
            @endforeach
        </div>

        <!-- Form untuk mengirim pesan -->
        <div class="card-footer bg-white border-top-0" style="border-radius: 15px;">
            <form action="{{ route('chat.send', $friend->id) }}" method="POST" class="d-flex">
                @csrf
                <textarea name="message" class="form-control me-2" rows="1" placeholder="{{ __('chat.type_message') }}" required style="border-radius: 20px; border: 1px solid #b0d4f1;"></textarea>
                <button type="submit" class="btn btn-primary" style="background-color: #4a90e2; border: none; border-radius: 20px;">{{ __('chat.send') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
    window.onload = function () {
        const messagesContainer = document.getElementById("messages");
        if (messagesContainer) {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
    };
</script>
