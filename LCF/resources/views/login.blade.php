
<!DOCTYPE html>
@extends('layouts.base')
<html lang='en'>

    <title> TEMA LA TAILLE DU SITE </title>


<body>
    @section('content')
<fieldset>
      <legend>Login</legend>
      <label>email:<input type="email"></label><br>
      <label>password:<input type="text"></label><br>
      <button>valider</button><br>
      <a href="reset">forgotten password</a><br>
      <a href="register">create account</a><br>
    </fieldset>
    @endsection


</body>
<html>
