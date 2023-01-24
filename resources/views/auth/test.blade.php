@extends('auth.bootstrap')
@section('title','test')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $user_data->name }}</td>
        <td>{{ $user_data->email }}</td>
      </tr>
    </tbody>
  </table>
@endsection