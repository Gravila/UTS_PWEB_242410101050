@extends('layouts.app')
@section('content')

<div class="profile-container">
    <div class="profile-card">
        <div class="profile-text">
            <p>Hi,</p>
            <h2>{{ $username }}</h2>
            <a href="/dashboard" class="profile-btn">Back to Dashboard</a>
        </div>

        <div class="profile-image">
            <img src="https://i.pravatar.cc/200" alt="profile">
        </div>
    </div>
</div>
@endsection