@extends('layouts.app')

@section('header', 'Profile Page')
@section('title', 'Profile')

@section('content')
    <h1>Voila, This is my Profile Page</h1>
    <p>This is some sample content.</p>
    <a href="{{ route('home') }}" class="btn btn-danger">DO NOT PUSH THIS BUTTON</a>
@endsection