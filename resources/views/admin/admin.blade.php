@extends('styles.bootstrap')
@section('title','admin')
@section('content')
<h1>admin</h1>
<h4>{{ $session }}</h4>

<a href="/logout">logout</a>
<img id="im" src="{{ $user->image }}" />
@endsection