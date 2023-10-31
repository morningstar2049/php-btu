@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1 class="mb-5">Home Page</h1>
    <div class="card">
    <div class="card-body">
        @foreach ($data as $item)
            <div class="d-flex flex-column">
                <h3>{{ $item['quizName'] }}</h3>
                <img src="{{ $item['photo'] }}" alt="Quiz Photo" style="width: 200px;">
                <span @class(['status', 'text-success font-weight-bold' => $item['status'] === 'active', 'text-danger font-weight-bold' => $item['status'] === 'inactive'])>
                    {{ strtoupper($item['status']) }}
                </span>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush