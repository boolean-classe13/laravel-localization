@extends('layouts.app')

@section('content')
    <h1>{{ __('messages.welcome', ['name' => 'Pippo']) }}</h1>
    <p>{{ trans_choice('messages.age', 1, ['years' => 1]) }}</p>
@endsection
