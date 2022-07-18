@extends('frontend.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <h5>{{ $user->name }}</h5>
                    <p>Email: {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
