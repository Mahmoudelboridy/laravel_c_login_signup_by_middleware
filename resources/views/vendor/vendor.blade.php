@extends('styles.bootstrap')
@section('title','vendor')
@section('content')
<h1>vendor</h1>
<h4>{{ $session }}</h4>
<a href="/logout">logout</a>
<img id="im" src="{{ $user->image }}" />
@endsection