@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Buy Avatar</h1>
    <div class="row">
        @foreach ($avatars as $avatar)
            <div class="col-md-3 mb-4">
                <div class="card text-center">
                    <img src="{{ $avatar->image_url }}" alt="Avatar" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Price: {{ $avatar->price }} coins</h5>
                        <form action="{{ route('avatars.buy') }}" method="POST">
                            @csrf
                            <input type="hidden" name="avatar_id" value="{{ $avatar->id }}">
                            <button type="submit" class="btn btn-primary">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
