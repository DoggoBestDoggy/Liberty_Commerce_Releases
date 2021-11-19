<!DOCTYPE html>

@extends('reset')

@section('main')
<form action="/register" method='post'>
      <input type='name' name='name' placeholder="Name"
      <input type='email' name='email' placeholder="Email"
      <input type='password' name='password' placeholder="Password"
      <input type='password' name='password_confirmation' placeholder="Password (confirm)"
      <input type='submit' value="Validate"

    </form>
@endsection
