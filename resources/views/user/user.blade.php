@extends('styles.bootstrap')
@section('title','user')
@section('content')
<h1>user</h1>
<h4>{{ $session }}</h4>

<a href="/logout">logout</a>
<img id="im" src="{{ $user->image }}" />

@endsection