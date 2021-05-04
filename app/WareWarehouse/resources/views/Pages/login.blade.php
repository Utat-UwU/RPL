@extends('layouts.app')

@section('content')
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>

  <a href="/forgot">Forgot Password?</a><br>
  <a href="/register">Don’t have an account? Register</a>
  @endsection