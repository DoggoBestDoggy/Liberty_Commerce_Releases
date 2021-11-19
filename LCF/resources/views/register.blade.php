<!DOCTYPE html>

@extends('layouts.base')

<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> TEMA LA TAILLE DU SITE </title>

    <link rel="stylesheet" href="style.css" type="text/css">

</head>


<body>
    @section('content')


    <form method='post' action="{{route('register') }}">
<fieldset>
<legend>register</legend>

      <label>nom:<input id="name" type="text"></label><br>
      <label>email:<input id='email' type="email"></label><br>
      <label>password:<input id='password' type="text"></label><br>
      <label>confirm password:<input id="confirm_password" type="text"></label><br>
      <input type="submit">valider</input><br>
    </fieldset>
    </form>
</main>

 @endsection

</body>
<html>
