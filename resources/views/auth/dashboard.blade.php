@extends('auth.bootstrap')
@section('title','dashboard')
@section('content')
<h3 class="text-center py-5">session name : {{ $name }}</h3>
<br><br>
<a href="login">logout</a>
@endsection