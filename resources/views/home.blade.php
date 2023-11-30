@extends('app')
@section('content')
@csrf
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<!--a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a-->
@endauth
@guest
<h1> Belum login </h1>
@endguest
@endsection