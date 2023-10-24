@extends('layouts.app')

@section('header', 'Landing')
@section('title', 'Home')

@section('content')
    <h1>Welcome to my unexciting Website</h1>
    <p>This is some sample content.</p>
    <a href="{{ route('profile') }}" class="btn btn-primary">DO NOT PUSH THIS BUTTON</a>
@endsection